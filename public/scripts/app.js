function _(el){return document.getElementById(el);}
function __(el){return document.getElementsByClassName(el);}
function ___(el){return document.getElementsByTagName(el);}


window.onscroll = function() {
    scrollToTop()
}

window.onload = function() {
    scrollToTop()
}


function toggleMenu(action) {
    action == "open" ? 
             _("mobile-sub-menu").classList.add("mobile-sub-menu-open")
        : 
            _("mobile-sub-menu").classList.remove("mobile-sub-menu-open");
}

function scrollToTop() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        _("scroll-to-top").style.display = "block";
    } else {
        _("scroll-to-top").style.display = "none";
    }
}

function updateTitle(title) {
    document.title = title;
}

function confirmDelete(id){
    if (confirm("Are you sure?")) {
        window.location.href = "?id=" + id;
    }
}

function confirmCanComment(id){
    window.location.href = "?can=comment&id=" + id;
}

function confirmCanPost(id){
    window.location.href = "?can=post&id=" + id;
}