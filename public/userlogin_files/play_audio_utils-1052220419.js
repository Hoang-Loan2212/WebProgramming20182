if("undefined"===typeof soundManagerReady){var soundManagerReady=!1;$(document).ready(function(){soundManager.setup({url:"/static/libs/soundmanager2/swf/",onready:function(){soundManagerReady=!0}})})}function updatePlayBackRate(a,b){soundManager.setPlaybackRate(a,b)}function playSoundInnerFunction(a){soundManager.createSound({id:a,url:a,autoLoad:!0});soundManager.play(a)}function playSound(a){if(soundManagerReady)playSoundInnerFunction(a);else soundManager.onready(playSoundInnerFunction(a))}
function playSoundWithCallBack(a,b){soundManager.createSound({id:a,url:a,autoLoad:!1,autoPlay:!1,onload:function(){},onfinish:function(){null!==b&&b()}}).play()};