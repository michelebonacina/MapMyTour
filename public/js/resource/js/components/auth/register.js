"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resource/js/components/auth/register"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

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
  name: 'register',
  data: function data() {
    return {
      user: {
        name: '',
        email: '',
        password: '',
        password_confirmation: ''
      },
      logo_path: 'images/brand/' + "bootstrap-solid.svg",
      errors: null,
      message: null,
      processing: false
    };
  },
  methods: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_0__.mapActions)({
    signIn: 'auth/login'
  })), {}, {
    register: function register(event) {
      var _this = this;

      event.preventDefault();
      this.processing = true;
      this.errors = null;
      this.message = null;
      axios.post('/api/register', this.user).then(function (response) {
        _this.signIn();
      })["catch"](function (_ref) {
        var data = _ref.response.data;
        _this.errors = data.errors;
        _this.message = data.message;
      })["finally"](function () {
        _this.processing = false;
      });
    }
  })
});

/***/ }),

/***/ "./resources/js/components/auth/Register.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/auth/Register.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Register.vue?vue&type=template&id=d4f9cbe2& */ "./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2&");
/* harmony import */ var _Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Register.vue?vue&type=script&lang=js& */ "./resources/js/components/auth/Register.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__.render,
  _Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/auth/Register.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/auth/Register.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/auth/Register.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Register.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_d4f9cbe2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Register.vue?vue&type=template&id=d4f9cbe2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/auth/Register.vue?vue&type=template&id=d4f9cbe2& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
        _c("h1", { staticClass: "text-center" }, [_vm._v("Register Now")]),
        _vm._v(" "),
        _c("hr"),
        _vm._v(" "),
        _c(
          "form",
          {
            staticClass: "row",
            attrs: { method: "post" },
            on: { submit: _vm.register }
          },
          [
            _c("div", { staticClass: "form-group col-12" }, [
              _c(
                "label",
                {
                  staticClass: "font-weight-bold",
                  attrs: { for: "inputName" }
                },
                [_vm._v("Name")]
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.user.name,
                    expression: "user.name"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "text",
                  name: "name",
                  id: "inputName",
                  placeholder: "Insert Your Name",
                  required: "",
                  autofocus: ""
                },
                domProps: { value: _vm.user.name },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.user, "name", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _vm.errors && _vm.errors.name
                ? _c(
                    "div",
                    _vm._l(_vm.errors.name, function(error) {
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
                    value: _vm.user.email,
                    expression: "user.email"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "email",
                  name: "email",
                  id: "inputEmail",
                  placeholder: "Insert Your Email",
                  required: ""
                },
                domProps: { value: _vm.user.email },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.user, "email", $event.target.value)
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
            _c("div", { staticClass: "form-group col-12" }, [
              _c(
                "label",
                {
                  staticClass: "font-weight-bold",
                  attrs: { for: "inputPassword" }
                },
                [_vm._v("Password")]
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.user.password,
                    expression: "user.password"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "password",
                  name: "password",
                  id: "inputPassword",
                  placeholder: "Enter Password",
                  required: ""
                },
                domProps: { value: _vm.user.password },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.user, "password", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _vm.errors && _vm.errors.password
                ? _c(
                    "div",
                    _vm._l(_vm.errors.password, function(error) {
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
            _c("div", { staticClass: "form-group col-12" }, [
              _c(
                "label",
                {
                  staticClass: "font-weight-bold",
                  attrs: { for: "inputPasswordConfirmation" }
                },
                [_vm._v("Confirm Password")]
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.user.password_confirmation,
                    expression: "user.password_confirmation"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "password",
                  name: "password_confirmation",
                  id: "inputPasswordConfirmation",
                  placeholder: "Confirm Password",
                  required: ""
                },
                domProps: { value: _vm.user.password_confirmation },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(
                      _vm.user,
                      "password_confirmation",
                      $event.target.value
                    )
                  }
                }
              }),
              _vm._v(" "),
              _vm.errors && _vm.errors.password_confirmation
                ? _c(
                    "div",
                    _vm._l(_vm.errors.password_confirmation, function(error) {
                      return _c(
                        "span",
                        { key: error, staticClass: "single-line" },
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
                      _vm._s(_vm.processing ? "Please wait" : "Register") +
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
              _vm._v("Forgot your password? "),
              _c("router-link", { attrs: { to: { name: "forgot" } } }, [
                _vm._v("Reset It")
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



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);