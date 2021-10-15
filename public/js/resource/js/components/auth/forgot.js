"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resource/js/components/auth/forgot"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _router__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../router */ "./resources/js/router/index.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'request',
  data: function data() {
    return {
      auth: {
        email: ''
      },
      logo_path: 'images/brand/' + "bootstrap-solid.svg",
      errors: null,
      processing: false
    };
  },
  methods: {
    request: function request(event) {
      var _this = this;

      event.preventDefault();
      this.processing = true;
      this.errors = null;
      axios.post('/api/password/email', this.auth).then(function (response) {
        _router__WEBPACK_IMPORTED_MODULE_0__["default"].push({
          name: 'verify',
          params: {
            email: _this.auth.email,
            message: response.data.message
          }
        });
      })["catch"](function (_ref) {
        var data = _ref.response.data;
        _this.errors = [];
        Object.values(data.errors).forEach(function (element) {
          _this.errors = _this.errors.concat(element);
        });

        if (_this.errors.length === 0) {
          _this.errors.push(data.message);
        }
      })["finally"](function () {
        _this.processing = false;
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/auth/Forgot.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/auth/Forgot.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Forgot.vue?vue&type=template&id=5aad138f& */ "./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f&");
/* harmony import */ var _Forgot_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Forgot.vue?vue&type=script&lang=js& */ "./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Forgot_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__.render,
  _Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/auth/Forgot.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Forgot_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Forgot.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Forgot_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Forgot_vue_vue_type_template_id_5aad138f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Forgot.vue?vue&type=template&id=5aad138f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Forgot.vue?vue&type=template&id=5aad138f& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container h-100" }, [
    _c("div", { staticClass: "row h-100 align-items-center" }, [
      _c("div", { staticClass: "col-12 col-md-6 offset-md-3" }, [
        _c("h1", { staticClass: "text-center" }, [
          _c("img", {
            attrs: { src: _vm.logo_path, alt: "", width: "72", height: "72" }
          })
        ]),
        _vm._v(" "),
        _c("h1", { staticClass: "text-center" }, [_vm._v("Reset Password")]),
        _vm._v(" "),
        _c("hr"),
        _vm._v(" "),
        _c(
          "form",
          {
            staticClass: "row",
            attrs: { method: "post" },
            on: { submit: _vm.request }
          },
          [
            _c("div", { staticClass: "form-group col-12" }, [
              _c(
                "label",
                {
                  staticClass: "font-weight-bold",
                  attrs: { for: "inputEmail" }
                },
                [_vm._v("Email")]
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.auth.email,
                    expression: "auth.email"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "email",
                  name: "email",
                  id: "inputEmail",
                  placeholder: "Enter Your Email",
                  required: "",
                  autofocus: ""
                },
                domProps: { value: _vm.auth.email },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.auth, "email", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _vm.errors && _vm.errors.email
                ? _c(
                    "div",
                    _vm._l(_vm.errors.email, function(error) {
                      return _c(
                        "span",
                        { key: error, staticClass: "single-line text-danger" },
                        [
                          _vm._v(
                            "\n              " +
                              _vm._s(error) +
                              "\n            "
                          )
                        ]
                      )
                    }),
                    0
                  )
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm.message
              ? _c(
                  "div",
                  {
                    staticClass: "alert alert-danger full-width",
                    attrs: { role: "alert" }
                  },
                  [_vm._v("\n          " + _vm._s(_vm.message) + "\n        ")]
                )
              : _vm._e(),
            _vm._v(" "),
            _c("div", { staticClass: "col-12 mb-2" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-primary btn-block",
                  attrs: { type: "submit", disabled: _vm.processing }
                },
                [
                  _vm._v(
                    "\n            " +
                      _vm._s(
                        _vm.processing
                          ? "Please wait"
                          : "Send Password Reset Link"
                      ) +
                      "\n          "
                  )
                ]
              )
            ])
          ]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "col-12 text-center" }, [
          _c(
            "label",
            { staticClass: "single-line mb-0" },
            [
              _vm._v("Already have an account? "),
              _c("router-link", { attrs: { to: { name: "login" } } }, [
                _vm._v("Login Now")
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "label",
            { staticClass: "single-line mb-0" },
            [
              _vm._v("Don't have an account? "),
              _c("router-link", { attrs: { to: { name: "register" } } }, [
                _vm._v("Register Now")
              ])
            ],
            1
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);