const express = require('express');

const {
    differentiate,
    showPage,
    getData,
} = require('./loginSignUp.controller');

const loginSignUpRouter = express.Router();

loginSignUpRouter.use(differentiate);

loginSignUpRouter.get('/', showPage);
loginSignUpRouter.post('/', getData);

module.exports = loginSignUpRouter;