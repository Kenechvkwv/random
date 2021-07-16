// // $.ajax(url);

// // $.ajax(url, [options]);

// // $.ajaxPrefilter(function (options, originalOptions, jqXHR) {});

// // // $.ajaxSetup( {name:value, name:value, ... } )

// // $.ajaxTransport( dataType, function( options, originalOptions, jqXHR ) {
// //     if( /* transportCanHandleRequest */ ) {
// //       return {
// //         send: function( headers, completeCallback ) {
// //           // Send code
// //         },
// //         abort: function() {
// //           // Abort code
// //         }
// //       };
// //     }
// //   });

// // $.get(url, [data],[callback]);

// // $(selector).getJSON(url,data,success(data,status,xhr))

// // var obj = JSON.parse('{"firstName":"John", "lastName":"Doe"}');

// // $.getScript( url, [callback] )

// // $.param( obj, optional-trad )

// // $.post(url,[data],[callback],[type]);

// // $(selector).ajaxComplete( function(event, jqXHR, options) );

// // $(selector).ajaxError( function(event, jqXHR, options, thrownError) );

// // $(selector).ajaxSend( function(event, jqXHR, options) );

// // $(selector).ajaxStart( function() );

// // $(selector).ajaxStop( function() );

// // $(selector).ajaxSuccess( function(event, jqXHR, options) );

// // $.load(url,[data],[callback]);

// // $(selector).serialize()

// // 
// <p>AJAX, which stands for Asynchronous Javascript and XML, is not a programming language, rather a means of exchanging data with a server and updating parts of a webpage without reloading the entire page.</p>
// <p>Jquery is a lightweight javascript library that makes the use of Javascript on a webpage easier.</p>
// <p>We will list and describe Jquery Ajax methods in the table below.</p>
// <table style="border-collapse: collapse; width: 100%; height: 1117px;" border="1">
// <tbody>
// <tr style="height: 18px;">
// <td style="width: 16.9981%; height: 18px;"><strong>Method</strong></td>
// <td style="width: 49.6685%; height: 18px;"><strong>Description</strong></td>
// <td style="width: 33.3333%; height: 18px;"><strong>Syntax</strong></td>
// </tr>
// <tr style="height: 57px;">
// <td style="width: 16.9981%; height: 57px;">$.ajax()</td>
// <td style="width: 49.6685%; height: 57px;">Used to retrieve or fetch data without having to reload the page (asynchronously).</td>
// <td style="width: 33.3333%; height: 57px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px;">
// <div><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">ajax</span>(<span style="color: #e06c75;">url</span>);</div>
// <br />
// <div><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">ajax</span>(<span style="color: #e06c75;">url</span>,[<span style="color: #e06c75;">options</span>]);</div>
// </div>
// </td>
// </tr>
// <tr style="height: 72px;">
// <td style="width: 16.9981%; height: 72px;"><span style="font-family: Verdana, sans-serif; font-size: 15px;">$.ajaxPrefilter()</span></td>
// <td style="width: 49.6685%; height: 72px;">Handles or modifies custom AJAX functions before each request is sent or processed by $.ajax()</td>
// <td style="width: 33.3333%; height: 72px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">ajaxPrefilter</span>(<span style="color: #c678dd;">function</span>&nbsp;</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px;">(<span style="color: #e06c75; font-style: italic;">options</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">originalOptions</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">jqXHR</span>)</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px;">{});</div>
// </td>
// </tr>
// <tr style="height: 38px;">
// <td style="width: 16.9981%; height: 38px;">$.ajaxSetup()</td>
// <td style="width: 49.6685%; height: 38px;">Used to set the default values for future AJAX requests.</td>
// <td style="width: 33.3333%; height: 38px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">ajaxSetup</span>(&nbsp;{<span style="color: #e06c75;">name</span>:<span style="color: #e06c75;">value</span>,&nbsp;<span style="color: #e06c75;">name</span>:<span style="color: #e06c75;">value</span>,</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;">... } )</div>
// </td>
// </tr>
// <tr style="height: 228px;">
// <td style="width: 16.9981%; height: 228px;">$.ajaxTransport()</td>
// <td style="width: 49.6685%; height: 228px;">Handles the creation of the actual object that actually transmits/transports the ajax data</td>
// <td style="width: 33.3333%; height: 228px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;">
// <div><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">ajaxTransport</span>(&nbsp;<span style="color: #e06c75;">dataType</span>,&nbsp;</div>
// <div><span style="color: #c678dd;">function</span>(&nbsp;<span style="color: #e06c75; font-style: italic;">options</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">originalOptions</span>,</div>
// <div><span style="color: #e06c75; font-style: italic;">jqXHR</span>&nbsp;)&nbsp;{</div>
// <div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">if</span>(&nbsp;<span style="color: #7f848e; font-style: italic;">/*&nbsp;transportCanHandleRequest&nbsp;*/</span>&nbsp;)&nbsp;{</div>
// <div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">return</span>&nbsp;{</div>
// <div>&nbsp;&nbsp;&nbsp; <span style="color: #61afef;">send</span>:&nbsp;<span style="color: #c678dd;">function</span>(&nbsp;<span style="color: #e06c75; font-style: italic;">headers</span>,&nbsp;</div>
// <div><span style="color: #e06c75; font-style: italic;"> completeCallback</span>)</div>
// <div>&nbsp;{ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #7f848e; font-style: italic;">//&nbsp;Send&nbsp;code</span> &nbsp;},</div>
// <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #61afef;">abort</span>:&nbsp;<span style="color: #c678dd;">function</span>()&nbsp;{</div>
// <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #7f848e; font-style: italic;">//&nbsp;Abort&nbsp;code</span> &nbsp;}</div>
// <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};}</div>
// <div>&nbsp;});</div>
// </div>
// </td>
// </tr>
// <tr style="height: 36px;">
// <td style="width: 16.9981%; height: 36px;">$.get()</td>
// <td style="width: 49.6685%; height: 36px;">Loads data from the server using the HTTP GET Request</td>
// <td style="width: 33.3333%; height: 36px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">get</span>(<span style="color: #e06c75;">url</span>,&nbsp;[<span style="color: #e06c75;">data</span>],[<span style="color: #e06c75;">callback</span>]);</div>
// </td>
// </tr>
// <tr style="height: 54px;">
// <td style="width: 16.9981%; height: 54px;">$.getJSON()</td>
// <td style="width: 49.6685%; height: 54px;">Fetches JSON-encoded data from the server using a GET HTTP request.</td>
// <td style="width: 33.3333%; height: 54px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">getJSON</span>(</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e06c75;">url</span>,<span style="color: #e06c75;">data</span>,<span style="color: #61afef;">success</span>(<span style="color: #e06c75;">data</span>,<span style="color: #e5c07b;">status</span>,<span style="color: #e06c75;">xhr</span>))</div>
// </td>
// </tr>
// <tr style="height: 54px;">
// <td style="width: 16.9981%; height: 54px;">JSON.parse()</td>
// <td style="width: 49.6685%; height: 54px;">Parse a string (written in JSON format) and return a JavaScript object</td>
// <td style="width: 33.3333%; height: 54px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #c678dd;">var</span>&nbsp;<span style="color: #e06c75;">obj</span>&nbsp;<span style="color: #56b6c2;">=</span>&nbsp;<span style="color: #e5c07b;">JSON</span>.<span style="color: #61afef;">parse</span>(<span style="color: #98c379;">'{</span></div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #98c379;">"firstName":"John",&nbsp;"lastName":"Doe"}'</span>);</div>
// </td>
// </tr>
// <tr style="height: 118px;">
// <td style="width: 16.9981%; height: 118px;">$.getScript()</td>
// <td style="height: 118px;">
// <p>Loads and executes a JavaScript file using an HTTP GET request. The method returns XMLHttpRequest object.</p>
// </td>
// <td style="width: 33.3333%; height: 118px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">getScript</span>(&nbsp;<span style="color: #e06c75;">url</span>,&nbsp;[<span style="color: #e06c75;">callback</span>] )</div>
// </td>
// </tr>
// <tr style="height: 54px;">
// <td style="width: 16.9981%; height: 54px;">$.param()</td>
// <td style="width: 49.6685%; height: 54px;">Allows us to create a serialized representation of an object or an array.</td>
// <td style="width: 33.3333%; height: 54px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">param</span>(&nbsp;<span style="color: #e06c75;">obj</span>,&nbsp;<span style="color: #e06c75;">optional</span><span style="color: #56b6c2;">-</span><span style="color: #e06c75;">trad</span> )</div>
// </td>
// </tr>
// <tr style="height: 36px;">
// <td style="width: 16.9981%; height: 36px;">$.post()</td>
// <td style="width: 49.6685%; height: 36px;">Loads data from the server using the HTTP POST Request</td>
// <td style="width: 33.3333%; height: 36px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">post</span>(<span style="color: #e06c75;">url</span>,[<span style="color: #e06c75;">data</span>],[<span style="color: #e06c75;">callback</span>],[<span style="color: #e06c75;">type</span>]);</div>
// </td>
// </tr>
// <tr style="height: 72px;">
// <td style="width: 16.9981%; height: 72px;">ajaxComplete()</td>
// <td style="width: 49.6685%; height: 72px;">Whenever an Ajax request completes jQuery triggers the ajaxComplete event, even if it is not successful.</td>
// <td style="width: 33.3333%; height: 72px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxComplete</span>(&nbsp;<span style="color: #c678dd;">function</span>(</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e06c75; font-style: italic;">event</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">jqXHR</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">options</span>) );</div>
// </td>
// </tr>
// <tr style="height: 60px;">
// <td style="width: 16.9981%; height: 60px;">ajaxError()</td>
// <td style="width: 49.6685%; height: 60px;"><span style="color: #222222; font-family: 'Droid Sans', Arial, Verdana, Tahoma; font-size: 16px; word-spacing: 0.8px;">Whenever an Ajax request completes with an error jQuery triggers the ajaxError event.</span></td>
// <td style="width: 33.3333%; height: 60px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxError</span>(&nbsp;<span style="color: #c678dd;">function</span>(</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e06c75; font-style: italic;">event</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">jqXHR</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">options</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">thrownError</span>) );</div>
// </td>
// </tr>
// <tr style="height: 38px;">
// <td style="width: 16.9981%; height: 38px;">ajaxSend()</td>
// <td style="width: 49.6685%; height: 38px;">This method gets called before the ajax request is sent.</td>
// <td style="width: 33.3333%; height: 38px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;">
// <div><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxSend</span>(&nbsp;<span style="color: #c678dd;">function</span>(</div>
// <div><span style="color: #e06c75; font-style: italic;">event</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">jqXHR</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">options</span>)&nbsp;);</div>
// </div>
// </td>
// </tr>
// <tr style="height: 54px;">
// <td style="width: 16.9981%; height: 54px;">ajaxStart()</td>
// <td style="width: 49.6685%; height: 54px;">This method gets called first before the AJAX request begins to send.</td>
// <td style="width: 33.3333%; height: 54px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxStart</span>(&nbsp;<span style="color: #c678dd;">function</span>() );</div>
// </td>
// </tr>
// <tr style="height: 54px;">
// <td style="width: 16.9981%; height: 54px;">ajaxStop()</td>
// <td style="width: 49.6685%; height: 54px;">This method gets called when all Ajax requests have been completed.</td>
// <td style="width: 33.3333%; height: 54px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxStop</span>(&nbsp;<span style="color: #c678dd;">function</span>() );</div>
// </td>
// </tr>
// <tr style="height: 18px;">
// <td style="width: 16.9981%; height: 18px;">ajaxSuccess()</td>
// <td style="width: 49.6685%; height: 18px;">This method gets called when all Ajax requests have been completed&nbsp;<strong>succesfully.</strong></td>
// <td style="width: 33.3333%; height: 18px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">ajaxSuccess</span>(&nbsp;<span style="color: #c678dd;">function</span>(</div>
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e06c75; font-style: italic;">event</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">jqXHR</span>,&nbsp;<span style="color: #e06c75; font-style: italic;">options</span>) );</div>
// </td>
// </tr>
// <tr style="height: 19px;">
// <td style="width: 16.9981%; height: 19px;">load()</td>
// <td style="width: 49.6685%; height: 19px;">This allows HTML or text content to be loaded from a server and added into a DOM element.</td>
// <td style="width: 33.3333%; height: 19px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #e5c07b;">$</span>.<span style="color: #61afef;">load</span>(<span style="color: #e06c75;">url</span>,[<span style="color: #e06c75;">data</span>],[<span style="color: #e06c75;">callback</span>]);</div>
// </td>
// </tr>
// <tr style="height: 19px;">
// <td style="width: 16.9981%; height: 19px;">serialize()</td>
// <td style="width: 49.6685%; height: 19px;"><span style="font-family: Verdana, sans-serif; font-size: 15px;">Encodes a set of form elements as a string for submission</span></td>
// <td style="width: 33.3333%; height: 19px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">serialize</span>()</div>
// </td>
// </tr>
// <tr style="height: 18px;">
// <td style="width: 16.9981%; height: 18px;">serializeArray()</td>
// <td style="width: 49.6685%; height: 18px;">Encodes a set of form elements as an array of names and values</td>
// <td style="width: 33.3333%; height: 18px;">
// <div style="color: #abb2bf; background-color: #282c34; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre;"><span style="color: #61afef;">$</span>(<span style="color: #e06c75;">selector</span>).<span style="color: #61afef;">serializeArray</span>()</div>
// </td>
// </tr>
// </tbody>
// </table>
// <p>..</p>


