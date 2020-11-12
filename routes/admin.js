var express = require('express');
var router = express.Router();


router.get('/appointment-list', function(req, res) {
  res.render('../views/admin/appointment-list');
});



router.get('/test', function(req, res) {
    res.render('../views/admin/test');
});

router.get('/booking', function(req, res) {
    res.render('../views/admin/booking');
});
router.get('/customers', function(req, res) {
    res.render('../views/admin/customers');
});

router.get('/index_admin', function(req, res) {
    res.render('../views/admin/index_admin');
});

router.get('/patient-list', function(req, res) {
    res.render('../views/admin/patient-list');
});

router.get('/staff-list', function(req, res) {
    res.render('../views/admin/staff-list');
});

router.get('/subadmin-list', function(req, res) {
    res.render('../views/admin/subadmin-list');
});

router.get('/passwords/change', function(req, res) {
    res.render('../views/vendor/multiauth/admin/passwords/change');
});

router.get('/passwords/email', function(req, res) {
    res.render('../views/vendor/multiauth/admin/passwords/email');
});

router.get('/passwords/reset', function(req, res) {
    res.render('../views/vendor/multiauth/admin/passwords/reset');
});

router.get('/edit', function(req, res) {
    res.render('../views/vendor/multiauth/admin/edit');
});

router.get('/home', function(req, res) {
    res.render('../views/vendor/multiauth/admin/home');
});

router.get('/home', function(req, res) {
    res.render('../views/vendor/multiauth/admin/home');
});

// router.get('/login', function(req, res) {
//     res.render('../views/vendor/multiauth/admin/login');
// });

router.get('', function(req, res) {
  res.render('login');
});


router.get('/register', function(req, res) {
    res.render('../views/vendor/multiauth/admin/register');
});

router.get('/show', function(req, res) {
    res.render('../views/vendor/multiauth/admin/show');
});

router.get('/role/create', function(req, res) {
    res.render('../views/vendor/multiauth/roles/create');
});

router.get('/role/edit', function(req, res) {
    res.render('../views/vendor/multiauth/roles/edit');
});

router.get('/role/index', function(req, res) {
    res.render('../views/vendor/multiauth/roles/index');
});


//require('../views/vendor/multiauth/roles')



module.exports = router;