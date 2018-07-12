
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:CharlotteDunois" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="CharlotteDunois.html">CharlotteDunois</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:CharlotteDunois_Validation" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="CharlotteDunois/Validation.html">Validation</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:CharlotteDunois_Validation_Rule" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="CharlotteDunois/Validation/Rule.html">Rule</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:CharlotteDunois_Validation_Rule_Accepted" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Accepted.html">Accepted</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_ActiveURL" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/ActiveURL.html">ActiveURL</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_After" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/After.html">After</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Alpha" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Alpha.html">Alpha</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_AlphaDash" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/AlphaDash.html">AlphaDash</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_AlphaNum" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/AlphaNum.html">AlphaNum</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_ArrayRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/ArrayRule.html">ArrayRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Before" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Before.html">Before</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Between" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Between.html">Between</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_BooleanRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/BooleanRule.html">BooleanRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_CallableRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/CallableRule.html">CallableRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_ClassRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/ClassRule.html">ClassRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Confirmed" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Confirmed.html">Confirmed</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Date" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Date.html">Date</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Date_Format" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Date_Format.html">Date_Format</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Different" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Different.html">Different</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Digits" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Digits.html">Digits</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Dimensions" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Dimensions.html">Dimensions</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Distinct" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Distinct.html">Distinct</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Email" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Email.html">Email</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_File" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/File.html">File</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Filled" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Filled.html">Filled</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_FloatRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/FloatRule.html">FloatRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_FunctionRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/FunctionRule.html">FunctionRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_IP" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/IP.html">IP</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Image" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Image.html">Image</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_In" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/In.html">In</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_IntegerRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/IntegerRule.html">IntegerRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_JSON" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/JSON.html">JSON</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Lowercase" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Lowercase.html">Lowercase</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Max" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Max.html">Max</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_MimeTypes" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/MimeTypes.html">MimeTypes</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Min" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Min.html">Min</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_NoWhitespace" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/NoWhitespace.html">NoWhitespace</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Numeric" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Numeric.html">Numeric</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Present" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Present.html">Present</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Regex" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Regex.html">Regex</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Required" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Required.html">Required</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Same" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Same.html">Same</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Size" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Size.html">Size</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_StringRule" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/StringRule.html">StringRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_URL" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/URL.html">URL</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Rule_Uppercase" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Rule/Uppercase.html">Uppercase</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:CharlotteDunois_Validation_ValidationRule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="CharlotteDunois/Validation/ValidationRule.html">ValidationRule</a>                    </div>                </li>                            <li data-name="class:CharlotteDunois_Validation_Validator" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="CharlotteDunois/Validation/Validator.html">Validator</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "CharlotteDunois.html", "name": "CharlotteDunois", "doc": "Namespace CharlotteDunois"},{"type": "Namespace", "link": "CharlotteDunois/Validation.html", "name": "CharlotteDunois\\Validation", "doc": "Namespace CharlotteDunois\\Validation"},{"type": "Namespace", "link": "CharlotteDunois/Validation/Rule.html", "name": "CharlotteDunois\\Validation\\Rule", "doc": "Namespace CharlotteDunois\\Validation\\Rule"},
            {"type": "Interface", "fromName": "CharlotteDunois\\Validation", "fromLink": "CharlotteDunois/Validation.html", "link": "CharlotteDunois/Validation/ValidationRule.html", "name": "CharlotteDunois\\Validation\\ValidationRule", "doc": "&quot;The ValidationRule interface that every rule has to implement.&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\ValidationRule", "fromLink": "CharlotteDunois/Validation/ValidationRule.html", "link": "CharlotteDunois/Validation/ValidationRule.html#method_validate", "name": "CharlotteDunois\\Validation\\ValidationRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            
            
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Accepted.html", "name": "CharlotteDunois\\Validation\\Rule\\Accepted", "doc": "&quot;Name: &lt;code&gt;accepted&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Accepted", "fromLink": "CharlotteDunois/Validation/Rule/Accepted.html", "link": "CharlotteDunois/Validation/Rule/Accepted.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Accepted::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/ActiveURL.html", "name": "CharlotteDunois\\Validation\\Rule\\ActiveURL", "doc": "&quot;Name: &lt;code&gt;activeurl&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\ActiveURL", "fromLink": "CharlotteDunois/Validation/Rule/ActiveURL.html", "link": "CharlotteDunois/Validation/Rule/ActiveURL.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\ActiveURL::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/After.html", "name": "CharlotteDunois\\Validation\\Rule\\After", "doc": "&quot;Name: &lt;code&gt;after&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\After", "fromLink": "CharlotteDunois/Validation/Rule/After.html", "link": "CharlotteDunois/Validation/Rule/After.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\After::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Alpha.html", "name": "CharlotteDunois\\Validation\\Rule\\Alpha", "doc": "&quot;Name: &lt;code&gt;alpha&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Alpha", "fromLink": "CharlotteDunois/Validation/Rule/Alpha.html", "link": "CharlotteDunois/Validation/Rule/Alpha.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Alpha::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/AlphaDash.html", "name": "CharlotteDunois\\Validation\\Rule\\AlphaDash", "doc": "&quot;Name: &lt;code&gt;alphadash&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\AlphaDash", "fromLink": "CharlotteDunois/Validation/Rule/AlphaDash.html", "link": "CharlotteDunois/Validation/Rule/AlphaDash.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\AlphaDash::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/AlphaNum.html", "name": "CharlotteDunois\\Validation\\Rule\\AlphaNum", "doc": "&quot;Name: &lt;code&gt;alphanum&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\AlphaNum", "fromLink": "CharlotteDunois/Validation/Rule/AlphaNum.html", "link": "CharlotteDunois/Validation/Rule/AlphaNum.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\AlphaNum::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/ArrayRule.html", "name": "CharlotteDunois\\Validation\\Rule\\ArrayRule", "doc": "&quot;Name: &lt;code&gt;array&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\ArrayRule", "fromLink": "CharlotteDunois/Validation/Rule/ArrayRule.html", "link": "CharlotteDunois/Validation/Rule/ArrayRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\ArrayRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Before.html", "name": "CharlotteDunois\\Validation\\Rule\\Before", "doc": "&quot;Name: &lt;code&gt;before&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Before", "fromLink": "CharlotteDunois/Validation/Rule/Before.html", "link": "CharlotteDunois/Validation/Rule/Before.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Before::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Between.html", "name": "CharlotteDunois\\Validation\\Rule\\Between", "doc": "&quot;Name: &lt;code&gt;between&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Between", "fromLink": "CharlotteDunois/Validation/Rule/Between.html", "link": "CharlotteDunois/Validation/Rule/Between.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Between::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/BooleanRule.html", "name": "CharlotteDunois\\Validation\\Rule\\BooleanRule", "doc": "&quot;Name: &lt;code&gt;boolean&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\BooleanRule", "fromLink": "CharlotteDunois/Validation/Rule/BooleanRule.html", "link": "CharlotteDunois/Validation/Rule/BooleanRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\BooleanRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/CallableRule.html", "name": "CharlotteDunois\\Validation\\Rule\\CallableRule", "doc": "&quot;Name: &lt;code&gt;callable&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\CallableRule", "fromLink": "CharlotteDunois/Validation/Rule/CallableRule.html", "link": "CharlotteDunois/Validation/Rule/CallableRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\CallableRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/ClassRule.html", "name": "CharlotteDunois\\Validation\\Rule\\ClassRule", "doc": "&quot;Name: &lt;code&gt;class&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\ClassRule", "fromLink": "CharlotteDunois/Validation/Rule/ClassRule.html", "link": "CharlotteDunois/Validation/Rule/ClassRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\ClassRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Confirmed.html", "name": "CharlotteDunois\\Validation\\Rule\\Confirmed", "doc": "&quot;Name: &lt;code&gt;confirmed&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Confirmed", "fromLink": "CharlotteDunois/Validation/Rule/Confirmed.html", "link": "CharlotteDunois/Validation/Rule/Confirmed.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Confirmed::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Date.html", "name": "CharlotteDunois\\Validation\\Rule\\Date", "doc": "&quot;Name: &lt;code&gt;date&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Date", "fromLink": "CharlotteDunois/Validation/Rule/Date.html", "link": "CharlotteDunois/Validation/Rule/Date.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Date::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Date_Format.html", "name": "CharlotteDunois\\Validation\\Rule\\Date_Format", "doc": "&quot;Name: &lt;code&gt;dateformat&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Date_Format", "fromLink": "CharlotteDunois/Validation/Rule/Date_Format.html", "link": "CharlotteDunois/Validation/Rule/Date_Format.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Date_Format::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Different.html", "name": "CharlotteDunois\\Validation\\Rule\\Different", "doc": "&quot;Name: &lt;code&gt;different&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Different", "fromLink": "CharlotteDunois/Validation/Rule/Different.html", "link": "CharlotteDunois/Validation/Rule/Different.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Different::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Digits.html", "name": "CharlotteDunois\\Validation\\Rule\\Digits", "doc": "&quot;Name: &lt;code&gt;digits&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Digits", "fromLink": "CharlotteDunois/Validation/Rule/Digits.html", "link": "CharlotteDunois/Validation/Rule/Digits.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Digits::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Dimensions.html", "name": "CharlotteDunois\\Validation\\Rule\\Dimensions", "doc": "&quot;Name: &lt;code&gt;dimensions&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Dimensions", "fromLink": "CharlotteDunois/Validation/Rule/Dimensions.html", "link": "CharlotteDunois/Validation/Rule/Dimensions.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Dimensions::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Distinct.html", "name": "CharlotteDunois\\Validation\\Rule\\Distinct", "doc": "&quot;Name: &lt;code&gt;distinct&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Distinct", "fromLink": "CharlotteDunois/Validation/Rule/Distinct.html", "link": "CharlotteDunois/Validation/Rule/Distinct.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Distinct::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Email.html", "name": "CharlotteDunois\\Validation\\Rule\\Email", "doc": "&quot;Name: &lt;code&gt;email&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Email", "fromLink": "CharlotteDunois/Validation/Rule/Email.html", "link": "CharlotteDunois/Validation/Rule/Email.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Email::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/File.html", "name": "CharlotteDunois\\Validation\\Rule\\File", "doc": "&quot;Name: &lt;code&gt;file&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\File", "fromLink": "CharlotteDunois/Validation/Rule/File.html", "link": "CharlotteDunois/Validation/Rule/File.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\File::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Filled.html", "name": "CharlotteDunois\\Validation\\Rule\\Filled", "doc": "&quot;Name: &lt;code&gt;filled&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Filled", "fromLink": "CharlotteDunois/Validation/Rule/Filled.html", "link": "CharlotteDunois/Validation/Rule/Filled.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Filled::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/FloatRule.html", "name": "CharlotteDunois\\Validation\\Rule\\FloatRule", "doc": "&quot;Name: &lt;code&gt;float&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\FloatRule", "fromLink": "CharlotteDunois/Validation/Rule/FloatRule.html", "link": "CharlotteDunois/Validation/Rule/FloatRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\FloatRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/FunctionRule.html", "name": "CharlotteDunois\\Validation\\Rule\\FunctionRule", "doc": "&quot;Name: &lt;code&gt;function&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\FunctionRule", "fromLink": "CharlotteDunois/Validation/Rule/FunctionRule.html", "link": "CharlotteDunois/Validation/Rule/FunctionRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\FunctionRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/IP.html", "name": "CharlotteDunois\\Validation\\Rule\\IP", "doc": "&quot;Name: &lt;code&gt;ip&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\IP", "fromLink": "CharlotteDunois/Validation/Rule/IP.html", "link": "CharlotteDunois/Validation/Rule/IP.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\IP::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Image.html", "name": "CharlotteDunois\\Validation\\Rule\\Image", "doc": "&quot;Name: &lt;code&gt;image&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Image", "fromLink": "CharlotteDunois/Validation/Rule/Image.html", "link": "CharlotteDunois/Validation/Rule/Image.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Image::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/In.html", "name": "CharlotteDunois\\Validation\\Rule\\In", "doc": "&quot;Name: &lt;code&gt;in&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\In", "fromLink": "CharlotteDunois/Validation/Rule/In.html", "link": "CharlotteDunois/Validation/Rule/In.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\In::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/IntegerRule.html", "name": "CharlotteDunois\\Validation\\Rule\\IntegerRule", "doc": "&quot;Name: &lt;code&gt;integer&lt;\/code&gt; - Type Rule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\IntegerRule", "fromLink": "CharlotteDunois/Validation/Rule/IntegerRule.html", "link": "CharlotteDunois/Validation/Rule/IntegerRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\IntegerRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/JSON.html", "name": "CharlotteDunois\\Validation\\Rule\\JSON", "doc": "&quot;Name: &lt;code&gt;json&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\JSON", "fromLink": "CharlotteDunois/Validation/Rule/JSON.html", "link": "CharlotteDunois/Validation/Rule/JSON.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\JSON::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Lowercase.html", "name": "CharlotteDunois\\Validation\\Rule\\Lowercase", "doc": "&quot;Name: &lt;code&gt;lowercase&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Lowercase", "fromLink": "CharlotteDunois/Validation/Rule/Lowercase.html", "link": "CharlotteDunois/Validation/Rule/Lowercase.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Lowercase::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Max.html", "name": "CharlotteDunois\\Validation\\Rule\\Max", "doc": "&quot;Name: &lt;code&gt;max&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Max", "fromLink": "CharlotteDunois/Validation/Rule/Max.html", "link": "CharlotteDunois/Validation/Rule/Max.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Max::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/MimeTypes.html", "name": "CharlotteDunois\\Validation\\Rule\\MimeTypes", "doc": "&quot;Name: &lt;code&gt;mimetypes&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\MimeTypes", "fromLink": "CharlotteDunois/Validation/Rule/MimeTypes.html", "link": "CharlotteDunois/Validation/Rule/MimeTypes.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\MimeTypes::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Min.html", "name": "CharlotteDunois\\Validation\\Rule\\Min", "doc": "&quot;Name: &lt;code&gt;min&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Min", "fromLink": "CharlotteDunois/Validation/Rule/Min.html", "link": "CharlotteDunois/Validation/Rule/Min.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Min::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/NoWhitespace.html", "name": "CharlotteDunois\\Validation\\Rule\\NoWhitespace", "doc": "&quot;Name: &lt;code&gt;nowhitespace&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\NoWhitespace", "fromLink": "CharlotteDunois/Validation/Rule/NoWhitespace.html", "link": "CharlotteDunois/Validation/Rule/NoWhitespace.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\NoWhitespace::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Numeric.html", "name": "CharlotteDunois\\Validation\\Rule\\Numeric", "doc": "&quot;Name: &lt;code&gt;numeric&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Numeric", "fromLink": "CharlotteDunois/Validation/Rule/Numeric.html", "link": "CharlotteDunois/Validation/Rule/Numeric.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Numeric::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Present.html", "name": "CharlotteDunois\\Validation\\Rule\\Present", "doc": "&quot;Name: &lt;code&gt;present&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Present", "fromLink": "CharlotteDunois/Validation/Rule/Present.html", "link": "CharlotteDunois/Validation/Rule/Present.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Present::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Regex.html", "name": "CharlotteDunois\\Validation\\Rule\\Regex", "doc": "&quot;Name: &lt;code&gt;regex&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Regex", "fromLink": "CharlotteDunois/Validation/Rule/Regex.html", "link": "CharlotteDunois/Validation/Rule/Regex.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Regex::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Required.html", "name": "CharlotteDunois\\Validation\\Rule\\Required", "doc": "&quot;Name: &lt;code&gt;required&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Required", "fromLink": "CharlotteDunois/Validation/Rule/Required.html", "link": "CharlotteDunois/Validation/Rule/Required.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Required::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Same.html", "name": "CharlotteDunois\\Validation\\Rule\\Same", "doc": "&quot;Name: &lt;code&gt;same&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Same", "fromLink": "CharlotteDunois/Validation/Rule/Same.html", "link": "CharlotteDunois/Validation/Rule/Same.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Same::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Size.html", "name": "CharlotteDunois\\Validation\\Rule\\Size", "doc": "&quot;Name: &lt;code&gt;size&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Size", "fromLink": "CharlotteDunois/Validation/Rule/Size.html", "link": "CharlotteDunois/Validation/Rule/Size.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Size::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/StringRule.html", "name": "CharlotteDunois\\Validation\\Rule\\StringRule", "doc": "&quot;Name: &lt;code&gt;string&lt;\/code&gt; - TypeRule&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\StringRule", "fromLink": "CharlotteDunois/Validation/Rule/StringRule.html", "link": "CharlotteDunois/Validation/Rule/StringRule.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\StringRule::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/URL.html", "name": "CharlotteDunois\\Validation\\Rule\\URL", "doc": "&quot;Name: &lt;code&gt;url&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\URL", "fromLink": "CharlotteDunois/Validation/Rule/URL.html", "link": "CharlotteDunois/Validation/Rule/URL.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\URL::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation\\Rule", "fromLink": "CharlotteDunois/Validation/Rule.html", "link": "CharlotteDunois/Validation/Rule/Uppercase.html", "name": "CharlotteDunois\\Validation\\Rule\\Uppercase", "doc": "&quot;Name: &lt;code&gt;uppercase&lt;\/code&gt;&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Rule\\Uppercase", "fromLink": "CharlotteDunois/Validation/Rule/Uppercase.html", "link": "CharlotteDunois/Validation/Rule/Uppercase.html#method_validate", "name": "CharlotteDunois\\Validation\\Rule\\Uppercase::validate", "doc": "&quot;This method validates the value using the rule&#039;s implementation.&quot;"},
            {"type": "Class", "fromName": "CharlotteDunois\\Validation", "fromLink": "CharlotteDunois/Validation.html", "link": "CharlotteDunois/Validation/Validator.html", "name": "CharlotteDunois\\Validation\\Validator", "doc": "&quot;The Validator.&quot;"},
                                                        {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_make", "name": "CharlotteDunois\\Validation\\Validator::make", "doc": "&quot;Create a new Validator instance.&quot;"},
                    {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_errors", "name": "CharlotteDunois\\Validation\\Validator::errors", "doc": "&quot;Returns errors.&quot;"},
                    {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_passes", "name": "CharlotteDunois\\Validation\\Validator::passes", "doc": "&quot;Determine if the data passes the validation rules.&quot;"},
                    {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_fails", "name": "CharlotteDunois\\Validation\\Validator::fails", "doc": "&quot;Determine if the data fails the validation rules.&quot;"},
                    {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_throw", "name": "CharlotteDunois\\Validation\\Validator::throw", "doc": "&quot;Determines if the data passes the validation rules, or throws.&quot;"},
                    {"type": "Method", "fromName": "CharlotteDunois\\Validation\\Validator", "fromLink": "CharlotteDunois/Validation/Validator.html", "link": "CharlotteDunois/Validation/Validator.html#method_language", "name": "CharlotteDunois\\Validation\\Validator::language", "doc": "&quot;Return the error message based on the language key (language based).&quot;"},
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


