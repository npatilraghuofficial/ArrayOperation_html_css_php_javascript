const questions = [
    {
        question:  "Which of the following correctly declares an array?",
        optionA: "int array[10];",
        optionB: "int array;",
        optionC: "array{10}",
        optionD: "array array[10]",
        correctOption: "optionA"
    },

    {
        question: "What is the index number of the last element of an array with 29 elements?",
        optionA: "29",
        optionB: "28",
        optionC: "0",
        optionD: "User-defined",
        correctOption: "optionB"
    },

    {
        question: "Which of the following is a two-dimensional array?",
        optionA: "array array[20][20];",
        optionB: "int array[20][20];",
        optionC: "int array[20, 20];",
        optionD: "char array[20];",
        correctOption: "optionB"
    },

    {
        question: "Elements in an array are accessed _____________",
        optionA: "Randomly",
        optionB: "Sequentially",
        optionC: "Exponentially",
        optionD: "Logarithemically",
        correctOption: "optionA"
    },

    {
        question: "How are String represented in memory in C?",
        optionA: "An array of characters",
        optionB: "The object of some class",
        optionC: "Same as other datatypes",
        optionD: "Linkedlist of Characters",
        correctOption: "optionA"
    },

    {
        question: "Which of the following is a linear data structure?",
        optionA: "Graphs",
        optionB: "Binary Trees",
        optionC: "Arrays",
        optionD: "AVL Trees",
        correctOption: "optionC"
    },

    {
        question: "Which operation can be performed on an array.",
        optionA: "Traversing",
        optionB: "Merging",
        optionC: "Sorting",
        optionD: "ALL of the above",
        correctOption: "optionD"
    },

    {
        question: "Assuming int is of 4 bytes, what is the size of int arr[15]; ?",
        optionA: "15",
        optionB: "19",
        optionC: "11",
        optionD: "60",
        correctOption: "optionD"
    },

    {
        question: "When does the ArrayIndexOutOfBoundsException occur?",
        optionA: "Compile-time",
        optionB: "Runtime",
        optionC: "Not an error",
        optionD: "Not an Exception",
        correctOption: "optionB"
    },

    {
        question: `"Deletion of an element from the array reduces the size of the array by________`,
        optionA: "One",
        optionB: "Two",
        optionC: "Four",
        optionD: "Minus One",
        correctOption: "optionA"
    },
]


let shuffledQuestions = [] //empty array to hold shuffled selected questions out of all available questions

function handleQuestions() { 
    
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1 
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0 


function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] 
    const currentQuestionAnswer = currentQuestion.correctOption 
    const options = document.getElementsByName("option"); 
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            correctOption = option.labels[0].id
        }
    })

    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            playerScore++ //adding to player's score
            indexNumber++ //adding 1 to index so has to display next question..

            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            wrongAttempt++ //adds 1 to wrong attempts 
            indexNumber++

            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer() //check if player picked right or wrong option
    unCheckRadioButtons()
    setTimeout(() => {
        if (indexNumber <= 9) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal, resets game and reshuffles questions
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}