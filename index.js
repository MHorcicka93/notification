try {
    const flatPost = connectAjax().flat(); // array[]
    const initialObj = initialization(flatPost); // 7 posts


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
        const obj = initialObj["posts"][selectId - 1];
        console.log(selectId);
        isRead = obj["status"];
        if (!isRead) {
            changeStatus(obj);
            initialObj["countUnReadPost"]--;
            isReadPost(selectId);
            setCounter(initialObj["countUnReadPost"]);

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

        initialObj["posts"].forEach((obj) => {
            isReadPost(obj["id"]);
        })

        initialObj["countUnReadPost"] = 0;

        setCounter(initialObj["countUnReadPost"]);
    })
    setCounter(initialObj["countUnReadPost"]);
} catch (error) {
    console.log(error);
}
