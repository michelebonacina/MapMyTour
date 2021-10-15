"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resource/js/components/auth/verify"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
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
        email: this.$route.params.email
      },
      logo_path: 'images/brand/' + "bootstrap-solid.svg",
      errors: null
    };
  },
  methods: {
    request: function request(event) {
      var _this = this;

      event.preventDefault();
      axios.post('/api/password/email', this.auth).then(function (response) {
        _this.errors = null;
      })["catch"](function (_ref) {
        var data = _ref.response.data;
        _this.errors = [];
        Object.values(data.errors).forEach(function (element) {
          _this.errors = _this.errors.concat(element);
        });

        if (_this.errors.length === 0) {
          _this.errors.push(data.message);
        }
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/auth/Verify.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/auth/Verify.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Verify.vue?vue&type=template&id=2f4f1de5& */ "./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5&");
/* harmony import */ var _Verify_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Verify.vue?vue&type=script&lang=js& */ "./resources/js/components/auth/Verify.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Verify_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__.render,
  _Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/auth/Verify.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/auth/Verify.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/auth/Verify.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Verify_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Verify.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Verify_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Verify_vue_vue_type_template_id_2f4f1de5___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Verify.vue?vue&type=template&id=2f4f1de5& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Verify.vue?vue&type=template&id=2f4f1de5& ***!
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
        _c("h1", { staticClass: "text-center" }, [
          _vm._v("Verify Your Email Address")
        ]),
        _vm._v(" "),
        _c("hr"),
        _vm._v(" "),
        !_vm.errors
          ? _c(
              "div",
              { staticClass: "alert alert-success", attrs: { role: "alert" } },
              [
                _vm._v(
                  "\n        A fresh verification link has been sent to your email address.\n      "
                )
              ]
            )
          : _vm._e(),
        _vm._v(" "),
        _vm.errors
          ? _c(
              "div",
              { staticClass: "alert alert-danger", attrs: { role: "alert" } },
              _vm._l(_vm.errors, function(error) {
                return _c("div", { key: error }, [
                  _vm._v("\n          " + _vm._s(error) + "\n        ")
                ])
              }),
              0
            )
          : _vm._e(),
        _vm._v(" "),
        _c(
          "form",
          {
            staticClass: "row",
            attrs: { method: "post" },
            on: { submit: _vm.request }
          },
          [_vm._m(0)]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "col-12 text-center" }, [
          _c(
            "label",
            { staticClass: "single-line mb-0" },
            [
              _vm._v("Go to "),
              _c("router-link", { attrs: { to: { name: "login" } } }, [
                _vm._v("Login Page")
              ])
            ],
            1
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-group col-12" }, [
      _vm._v(
        "\n          Before proceeding, please check your email for a verification link. If you did not receive the email,\n          "
      ),
      _c(
        "button",
        {
          staticClass: "btn btn-link p-0 m-0 align-baseline",
          attrs: { type: "submit" }
        },
        [_vm._v("\n            click here to request another\n          ")]
      ),
      _vm._v("\n          .\n        ")
    ])
  }
]
render._withStripped = true



/***/ })

}]);