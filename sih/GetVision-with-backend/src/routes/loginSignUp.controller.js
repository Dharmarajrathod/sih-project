const signUp = require("../Database/models/signup.model");

let type = "login";

function differentiate(req, res, next) {
    type = req.body.length === 2 ? "Login" : "SignUp";
    next();
}

async function register(req, res) {
    // const username = req.body.username;
    // const email = req.body.email;
    // const password = req.body.password;
    // console.log(username, email, password);
    try {
        const user = new signUp({
            username: req.body.username,
            email: req.body.email,
            password: req.body.password,
        });
        await user.save();
        res.status(200).send("You have been successfully registered");
    } catch (error) {
        res.status(404).send(error);
    }
}

function showPage(req, res) {
    res.render('login-signup');
}

function getData(req, res) {
    if (type === "SignUp") {
        register(req, res);
    }
}

module.exports = {
    differentiate,
    showPage,
    getData
};