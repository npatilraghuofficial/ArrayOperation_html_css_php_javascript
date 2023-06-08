<!DOCTYPE html>
<head>
    <div class="element">
        <div class="element2">

    </div>
</head>
<style>
.element {
  height: 350px;
  width: 350px;
  margin: 0 auto;
  border-radius: 0px 0px 0px 10px;
  background-color: greenyellow;
  box-shadow: 5px;
  animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: 1;
  animation-fill-mode: none;
  animation-play-state: running;

}
.element2 {
  height: 250px;
  width: 250px;
  margin: 0 auto;
  background-color: orangered;
  box-shadow: 5px;
  animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: 1;
  animation-fill-mode: none;
  animation-play-state: running;
  z-index: 1;

}

@keyframes stretch {
  0% {
    transform: scale(.3);
    background-color: red;
    border-radius: 100%;
  }
  50% {
    background-color: orange;
  }
  100% {
    transform: scale(1.5);
    background-color: yellow;
  }
}

body,
html {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

