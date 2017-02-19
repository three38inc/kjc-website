window.blockspring = (function($){
  return blockspring = {
    getDataUri: function(file_param){
      if ("data" in file_param && "content-type" in file_param){
        return ("data:" + file_param["content-type"] + ";base64," + file_param["data"]);
      } else {
        console.log("Can't generate URI");
        return null;
      }
    },
    parseFile: function(file_param){
      if ("data" in file_param){
        return atob(file_param["data"]);
      } else {
        console.log("Can't parse file");
        return null;
      }
    },
    toType: function(obj) {
      return ({}).toString.call(obj).match(/\s([a-zA-Z]+)/)[1].toLowerCase();
    },
    Request: function(){
      this.params = {};
      this.stdin = '';
      this._errors = [];
      this._headers = {};

      this.getErrors = function(){
        return this._errors;
      };

      this.addError = function(error){
        this._errors.push(error);
      };

      this.addHeaders = function(headers){
        this._headers = headers;
      };

      this.getHeaders = function(){
        return this._headers;
      };
    },
    run: function(block, data, options, callback) {
      // checks in case callback was provided in place of data or options.
      if (typeof data === 'function') {
        // allow data and api_key to be optional
        callback = data;
        data = {};
      } else if (typeof options === 'function') {
        // allow api_key to be optional, but keep callback as last argument
        callback = options;
      } else if (typeof options === "string"){
        options = {
          api_key: options,
          cache: false,
          expiry: null
        }
      }

      // checks in case callback was provided in place of data or options.
      data = typeof data !== 'undefined' || data === null ? data : {};
      options = typeof options !== 'undefined' ? options : { api_key: null, cache: false, expiry: null }

      if (!("api_key" in options)){
        options.api_key = null;
      }

      if (!(this.toType( data ) == "object")){
        throw "your data needs to be an object.";
      }

      var api_key = options.api_key || "";
      var cache = ("cache" in options) ? options.cache : false;
      var expiry = ("expiry" in options && options.expiry != null ) ? ("&expiry=" + options["expiry"]) : ""

      var blockspring_url = 'https://sender.blockspring.com'
      var block = block.split("/").slice(-1)[0];
      var url = blockspring_url + "/api_v2/blocks/" + block + "?api_key=" + api_key + "&cache=" + cache + expiry;

      $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify(data),
        crossDomain: true
      }).done(function(body){
        if (callback){
          callback(body);
        }
      });
    },
    parse: function(input_params, json_parsed, callback){
      json_parsed = typeof json_parsed !== 'undefined' || json_parsed === null ? json_parsed : true;

      var request = new this.Request();

      if (json_parsed == true) {
        params = input_params
      } else {
        try {
          params = JSON.parse(input_params);
        } catch(e) {
          throw "You didn't pass valid json inputs.";
        };
      }

      if (!(this.toType( params ) == "object")){
        throw "Can't parse keys/values from your json inputs.";
      }

      if (!(("_blockspring_spec" in params) && params._blockspring_spec)){
        request.params = params;
        callback(request);
        return;
      }

      Object.keys(params).forEach(function(var_name){

        // Ignore blockspring_spec flag
        if (var_name == "_blockspring_spec"){
          return;
        }
        // Add any errors to the request object
        else if ((var_name == "_errors") && (this.toType( params[var_name] ) == "array")){
          params[var_name].forEach(function(error){
            if((this.toType( error ) == "object") && ("title" in error)){
              request._errors.push(error);
            }
          }.bind(this));
        }
        // Add any headers to the request object
        else if ((var_name == "_headers") && (this.toType( params[var_name] ) == "object")){
          request.addHeaders(params[var_name]);
        }
        // Otherwise treat it as a normal input
        else {
          request.params[var_name] = params[var_name];
        }
      }.bind(this));

      callback(request);
    },
    runParsed: function(block, data, options, callback) {
      // checks in case callback was provided in place of data or options.
      if (typeof data === 'function') {
        // allow data and api_key to be optional
        callback = data;
        data = {};
      } else if (typeof options === 'function') {
        // allow api_key to be optional, but keep callback as last argument
        callback = options;
      } else if (typeof options === "string"){
        options = {
          api_key: options,
          cache: false,
          expiry: null
        }
      }

      // checks in case callback was provided in place of data or options.
      data = typeof data !== 'undefined' || data === null ? data : {};
      options = typeof options !== 'undefined' ? options : { api_key: null, cache: false, expiry: null }

      if (!("api_key" in options)){
        options.api_key = null;
      }

      if (!(this.toType( data ) == "object")){
        throw "your data needs to be an object.";
      }

      var api_key = options.api_key || "";
      var cache = ("cache" in options) ? options.cache : false;
      var expiry = ("expiry" in options && options.expiry != null ) ? ("&expiry=" + options["expiry"]) : ""

      var blockspring_url = 'https://sender.blockspring.com'
      var block = block.split("/").slice(-1)[0];
      var url = blockspring_url + "/api_v2/blocks/" + block + "?api_key=" + api_key + "&cache=" + cache + expiry;

      $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify(data),
        crossDomain: true
      }).done(function(body){
        try {
          if (!(this.toType( body ) == "object")){
            if (callback){
              callback(body);
            }
            return body;
          }
        } catch(e) {
          if (callback){
            callback(body);
          }
          return body;
        };
        return this.parse(body, true, callback)
      }.bind(this));
    }
  }
}(jQuery));