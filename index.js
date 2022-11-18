try {
    const flatPost = connectAjax(); // array[]
    const initialPosts = initialization(flatPost["posts"]); // 7 posts


    // for (let index = 0; index < statusObj.length; index++) {
    //     const obj = statusObj[index];
    //     console.log(obj);
    //     const id = obj["id"];

    //     if (!isRead) {
    //         unReadPost++;
    //     }

    // }
    const post = $(".posts");
    post.click(function (e) {
        let selectId = setID(e); //set number [1,2,3,4,5,6,7] of selected post__item
        const obj = initialPosts["posts"][selectId - 1];
        console.log(selectId);
        // isRead = true;
        isRead = obj["status"];
        if (!isRead) {
            changeStatus(obj);
            initialPosts["countUnReadPost"]--;
            isReadPost(selectId);
            setCounter(initialPosts["countUnReadPost"]);
        } 
    })


    // flatPost.forEach((obj) => {

    // let isRead = obj["readPost"];
    // const id = obj["id"];

    // if (!isRead) {
    //     selectItem(id);
    //     unReadPost++;
    // }
    // });
    // if (isRead) {
    //     isRead = true;
    //     unReadPost--;
    //     isUnReadPost(id);
    //     setCounter(unReadPost);
    // }


    // flatPost.forEach((obj) => {

    // let isRead = obj["readPost"];
    // const id = obj["id"];
    // const postItem = $(".post__item--" + (id))

    // if (!isRead) {
    //     selectItem(id);
    //     unReadPost++;
    // }
    // postItem.click(function () {
    //     if (!isRead) {
    //         isRead = true;
    //         unReadPost--;
    //         isUnReadPost(id);
    //         setCounter(unReadPost)
    //     }
    // });
    // })
    //All post message was read + set 0 on counter

    $("#allRead--link").click(function () {

        initialPosts["posts"].forEach((obj) => {
            isReadPost(obj["id"]);
        })

        initialPosts["countUnReadPost"] = 0;

        setCounter(initialPosts["countUnReadPost"]);
    })
    setCounter(initialPosts["countUnReadPost"]);
} catch (errorMessage) {
    let parentAlert = document.createElement("div");
    parentAlert.setAttribute("class", "error__modul");
    const textAlert = document.createTextNode(errorMessage);
    parentAlert.appendChild(textAlert);

    // let error =document.getElementById("posts__section");
    let error = $("#posts__section")[0];
    error.insertBefore(parentAlert, error.children[0]);
}
