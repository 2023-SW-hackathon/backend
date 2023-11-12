"use strict";

const express = require("express");
const router = express.Router();

router.get("/", ctrl.output.home);

router.get("/login", ctrl.lgin);

module.exports = router;