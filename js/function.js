function selectItem(id) {
    const postItem = $(".post__item--" + (id))
    postItem.css("background-color", "rgba(141, 145, 158, 0.05)");
}
function isUnReadPost(id) {
    const postItem = ".post__item--" + (id);
    $(postItem).css("background-color", "white");
    $(postItem + " .signal").css("display", "none");
}
function setCounter(unReadPost) {
    $("#counter").text(unReadPost);
}