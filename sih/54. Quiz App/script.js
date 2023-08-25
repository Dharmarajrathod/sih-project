const quizData = [
    {
        question: "What is your current mood?",
        a: "Happy",
        b: "Sad",
        c: "Stressed",
        d: "Neutral",
        e:  "Confused",
    },
    {
        question: "What are the reasons for your current mood?",
        a: "Academics",
        b: "Social Interaction",
        c: "Cascading Simple Sheets",
    },
    {
        question: "How productive your day was?",
        a: "Highly Productive,
        b: "Somewhat Productive",
        c: "Highly Productive",
    },
    {
        question: "How often do you come out of your Comfort zone?",
        a: "Very often",
        b: "Sometimes",
        c: "1Rarely or not at all",
    },
    {
        question: "What do You think you need the most right now?",
        a:  "Discipline",
        b:  "Focus",
        c: "Growth",
        d: "Balance"
    }
    {
        question: "How many hours do you sleep?",
        a:  "9 or more Hours",
        b: "7-9 Hours",
        c:  "Less than 7 Hours"
    }
    {
        question: "What do you do in your free time?"
        a:  "Listen/Sing Music",
        b:  "Read Books",
        c:  "Creative Activity",
        d:  "Physical Activity"
    }
    {
        question: "What is your exercise routine?",
        a:  "Daily",
        b:  "2-3 times in a week",
        c:  "Once in a week",
        d:  "Never"
    }
    {
        question: "Have you ever scheduled your daily tasks? If yes, did you follow it completely?",
        a:  "Never tried",
        b:  "Only made, never followed",
        c:  "Made, but couldn't follow completely",
        d:  "Made and followed it completely"
    }
    {
        question: "How are you at your Academics?",
        a:  "Excellent",
        b:  "Intermediate",
        c:  "Below Average"
    }
    {
        question: "Whom do you communicate when you're tensed?",
        a:  "Parents",
        b:  "Friends",
        c:  "Guide",
        d:  "None"
    }

];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})