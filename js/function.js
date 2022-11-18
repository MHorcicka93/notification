function selectItem() {
    const postItem = $(".post__item")
    postItem.css("background-color", "rgba(141, 145, 158, 0.05)");
}
// function selectItem(id) {
//     const postItem = $(".post__item--" + (id))
//     postItem.css("background-color", "rgba(141, 145, 158, 0.05)");
// }
function initialization(obj) {

    const statusObj = [...obj].flat();
    let unReadPost = statusObj.length;
    selectItem();
    return {
        posts: statusObj,
        countUnReadPost: unReadPost
    }
}
function isReadPost(id) {
    const postItem = '[class*="post__item--' + (id) + '"]';

    $(postItem).css("background-color", "white");
    $(postItem + " .signal").css("display", "none");
}
function setCounter(unReadPost) {
    $("#counter").text(unReadPost);
}
function changeStatus(obj) {
    obj["status"] = true;

}
function setID(e) {
    let id = ""
    const selectElement = e.target.parentElement.parentElement.className;
    const selectContentElement = e.target.parentElement.parentElement.parentElement.className;

    if (selectElement.includes("post__item")) {
        id = selectElement.slice(-1);

    } else if (selectContentElement.includes("post__item")) {
        id = selectContentElement.slice(-1);

    }
    return id
}