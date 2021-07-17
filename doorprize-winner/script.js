var participantBox = document.getElementById('participantInput');
var shuffledNumberBox = document.getElementById('shuffledNumberBox');
var shuffleNumberButton = document.getElementById('shuffleNumberButton');

shuffleNumberButton.addEventListener('click', () => {
    shuffledNumberBox.innerText = shuffleNumberButton(participantBox.value);
});

shuffleNumberButton = (participant) => {
    return Math.ceil(Math.random() * participant);
}