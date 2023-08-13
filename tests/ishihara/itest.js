const question = document.getElementById('plate');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
//const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {}
let acceptingAnswers = true
//let score = 0
let questionCounter = 0
let availableQuestions = []

const wrong = []

var images = ["/images/i_1.png", "/images/i_2.png", "/images/i_3.png", "/images/i_4.png", "/images/i_5.png", "/images/i_6.png", "/images/i_7.png", 
                "/images/i_8.png", "/images/i_9.png", "/images/i_10.png", "/images/i_11.png", "/images/i_12.png", "/images/i_13.png", 
                "/images/i_14.png", "/images/i_15.png", "/images/i_16.png",]

let questions = [
    {
        id:1,
        question: images[0],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 7,
    },
    {
        id:2,
        question: images[1],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 0,
    },
    {
        id:3,
        question: images[2],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 1,
    },
    {
        id:4,
        question: images[3],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 4,
    },
    {
        id:5,
        question: images[4],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 2,
    },
    {
        id:6,
        question: images[5],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 3,
    },
    {
        id:7,
        question: images[6],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 5,
    },
    {
        id:8,
        question: images[7],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 9,
    },
    {
        id:9,
        question: images[8],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 2,
    },
    {
        id:10,
        question: images[9],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 8,
    },
    {
        id:11,
        question: images[10],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 7,
    },
    {
        id:12,
        question: images[11],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 4,
    },
    {
        id:13,
        question: images[12],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 6,
    },
    {
        id:14,
        question: images[13],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 1,
    },
    {
        id:15,
        question: images[14],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 8,
    },
    {
        id:16,
        question: images[15],
        choice1: '1', choice2: '2', choice3: '3', choice4: '4', choice5: '5', choice6: '6', 
        choice7: '7', choice8: '8',choice9: '9', choice0: '0', choice11: 'Skip',
        answer: 5,
    },
]

//const SCORE_POINTS = 100
const MAX_QUESTIONS = 16

startGame = () => {
    localStorage.removeItem("wrong")
    questionCounter = 0
    //score = 0
    availableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
        //localStorage.setItem('mostRecentScore', score)
        return window.location.assign('/tests/ishihara/iend.php')
    }

    questionCounter++
    progressText.innerText = `Question ${questionCounter} of ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`

    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.setAttribute("src", currentQuestion.question)

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1)

    acceptingAnswers = true

}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptingAnswers) return
        
        acceptingAnswers = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if(classToApply === 'correct'){
            //incrementScore(SCORE_POINTS)
        } else {
            wrong.push(currentQuestion.id);
            localStorage.setItem('wrong', JSON.stringify(wrong));
            console.log(wrong);
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()

        }, 1000)
    })
})

// incrementScore = num => {
//     score +=num
//     scoreText.innerText = score
// }

startGame()