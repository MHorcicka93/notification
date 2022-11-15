
const flatPost = connectAjax().flat();
const countPosts = flatPost.length;
let unReadPost = 0;

flatPost.forEach((obj) => {
    
    let isRead = obj["readPost"];
    const id = obj["id"];
    const postItem = $(".post__item--" + (id))
    
    if (!isRead) {
        selectItem(id);
        unReadPost++;
    }
    postItem.click(function () {
        if (!isRead) {
            isRead = true;
            unReadPost--;
            isUnReadPost(id);
            setCounter(unReadPost)
        }
    });
})
//All post message was read + set 0 on counter
$("#allRead--link").click(function () {
    flatPost.forEach((obj) => {
        isUnReadPost(obj["id"]);
    })
    unReadPost = 0;
    setCounter(unReadPost)
})
setCounter(unReadPost)
