document.querySelector('#file').addEventListener('change', function(){
    document.querySelector('.text').textContent = this.files[0].name
})

document.querySelector('#file').addEventListener('change', function(){
    document.querySelector('.arquivo').textContent = this.files[0].name
})