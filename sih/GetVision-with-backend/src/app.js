const express = require('express');
const path = require('path');
const hbs = require('hbs');

const app = express();
require('./Database/db_connection/connection')

const public_path = path.join(__dirname, '..', 'public');
const template_path = path.join(__dirname, 'template', 'views');
const partial_path = path.join(__dirname, 'template', 'partials');
const image_path = path.join(__dirname, '..', 'public', 'images');
const css_path = path.join(__dirname, '..', 'public', 'css');
const JS_path = path.join(__dirname, '..', 'public', 'JS');

const loginSignUpRouter = require('./routes/loginSignUp.router');

app.use(express.json())
app.use(express.urlencoded({ extended: false }));

app.use(express.static(public_path));
app.use(express.static(image_path));
app.use(express.static(css_path));
app.use(express.static(JS_path));

app.set('view engine', 'hbs');
app.set('views', template_path);

hbs.registerPartials(partial_path)

app.use('/login-signup', loginSignUpRouter);

app.get('/', (req, res) => {
    res.render('home-page');
});

// app.listen(3000, () => {
//     console.log("Listening at port 3000...");
// });

module.exports = app;
