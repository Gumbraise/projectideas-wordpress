let postImage = document.getElementById('post-image');
postImage.onchange = evt => {
    const [file] = postImage.files
    if (file) {
        document.getElementById('post-image-back').style.backgroundImage = `url('${URL.createObjectURL(file)}')`;
    }
}