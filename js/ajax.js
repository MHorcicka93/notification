function connectAjax() {
    
    const posts = [];
    let errorMessage = "";
    const result = {
        posts: posts,
        error:errorMessage
    }
    $.ajax({
        type: "POST",
        url: './php/encodePost.php',
        async: false,
    
        success: function (response) {
            posts.push(response);
            console.log(response);
   
        },
        error: function (error) {
            errorMessage+=error.responseText;
        },
        dataType: "json"
    
    });

    return result;
}
