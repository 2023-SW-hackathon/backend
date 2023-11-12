"use strict";

const home = (req, res) => {
    res.render("index.html");
};

const login = (req, res) => {
    res.render("login.html");
}; 

module.exports = {
    hone,
    login,
};
