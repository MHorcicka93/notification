    
   let countunReadPost=0;
   const posts=[];
    $.ajax({
        type:"POST",
        url:'./php/encodePost.php',
        async:false,
        
        success:function(response) {
            posts.push(response);   
        },
        error:function(error) {
            console.log(error.responseText);
        },
        dataType:"json"
        
    })

    const flatPost=posts.flat();
    const countPosts = flatPost.length;
    let unReadPost=0;

    for (let index = 0; index < countPosts;index++) {

        let isRead = flatPost[index]["readPost"];
       

        if (!isRead) {
            $(".post__item--" + (index+1)).css("background-color", "rgba(141, 145, 158, 0.05)");
            unReadPost++;
        }
        $(".post__item--" + (index+1)).click(function() {

            if (!isRead) {
                isRead = true;
                unReadPost--;
                $(".post__item--" + (index+1)).css("background-color", "white");
                $(".post__item--" + (index+1)+" .signal").css("display", "none");
                $("#counter").text(unReadPost); 
            }
        });
    }
    $("#counter").text(unReadPost); 
    