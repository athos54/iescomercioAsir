"use strict";

class Test {
  constructor(questions) {
    this.questions = questions;
  }

  generateAllQuestions(){
    for (var question in this.questions) {
      var oneOfTheQuestions = this.questions[question];
      if (!this.questions.hasOwnProperty(question)) continue;
      this.wrapQuestion (oneOfTheQuestions);
      this.generateBr();
    }
  }

  wrapQuestion ( question ){
    this.generateQuestion(question);
    this.generateAnswers(question.number,question.answers);
  };

  generateQuestion(question){
    let questionDiv = document.createElement('div');
    let questionSpan = document.createElement('span');

    questionSpan.innerHTML = question.question;
    questionDiv.appendChild(questionSpan);
    this.appendToBody(questionDiv);
  }

  generateAnswers(questionNumber,answers){
    for (var answer in answers) {
      var oneOfTheAnswers = answers[answer];

      if (!answers.hasOwnProperty(answer)) continue;

      this.generateAnswerInput(questionNumber,oneOfTheAnswers.text);
      this.generateAnswerLabel(questionNumber,oneOfTheAnswers.text);
      this.generateBr();
    }
  }

  generateBr(){
    let br = document.createElement('br');
    this.appendToBody(br);
  }

  generateAnswerLabel(questionNumber,answerText){
    let questionLabel = document.createElement('label');
    questionLabel.setAttribute('for','question_' + questionNumber);
    questionLabel.innerHTML = answerText;
    this.appendToBody(questionLabel);
  }

  generateAnswerInput(questionNumber,questionText){
    let answerDiv = document.createElement('div');
    let questionRadio = document.createElement('input');

    questionRadio.setAttribute('type', 'radio');
    questionRadio.setAttribute('name', 'question_' + questionNumber);
    questionRadio.setAttribute('id', 'question_' + questionNumber);

    questionRadio.value = questionText;
    answerDiv.appendChild(questionRadio);
    this.appendToBody(questionRadio);
  }

  appendToBody(element){
    document.body.appendChild(element);
  }

}
