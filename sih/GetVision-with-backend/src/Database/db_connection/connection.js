const mongoose = require('mongoose');

mongoose.connect("mongodb://localhost:27017/GetVision", {
    useNewUrlParser: true,
}).then(() => { 
    console.log("Connected to the Database!!!!");
}).catch((e) => {
    console.log(e);
})