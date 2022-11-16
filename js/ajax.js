function connectAjax() {
    
    let posts = [];
    $.ajax({
        type: "POST",
        url: './php/encodePost.php',
        async: false,
    
        success: function (response) {
       
            posts.push(response);
        },
        error: function (error) {
            console.log(error.responseText);
        },
        dataType: "json"
    
    });

    return posts;
}
