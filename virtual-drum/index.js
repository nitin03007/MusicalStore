


window.addEventListener('keydown',function(e){
    if(!document.querySelector(`audio[data-key="${e.keyCode}"]`)) return;
    let audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    let key = document.querySelector(`.key[data-key="${e.keyCode}"]`)
    audio.currentTime = 0;
    audio.play();
    key.classList.add('playing');
})

let keys = document.querySelectorAll('.key');
keys.forEach((key)=>{
    key.addEventListener('transitionend',function(){
        this.classList.remove('playing')
    })
})





























// window.addEventListener('keydown',function(e){
//     if(!document.querySelector(`audio[data-key="${e.keyCode}"]`)) return;
//     let audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
//     let key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
//     audio.currentTime = 0;
//     audio.play();
//     key.classList.add('playing');
// })

// document.querySelectorAll('.key').forEach(key => {
//     key.addEventListener('transitionend',function(){
//         this.classList.remove('playing')
//     })
// });
