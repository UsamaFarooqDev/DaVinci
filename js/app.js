function show_gallery(){
    document.getElementById('gallery').style.display="block";
}
function hide_gallery(){
    document.getElementById('gallery').style.display="none";
}
function show_video(){
    document.getElementById('video').style.display="block";
    
}
function hide_video(){
    document.getElementById('video').style.display = "none";
    document.getElementById('myvideo').pause();
}