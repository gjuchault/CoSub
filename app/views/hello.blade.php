<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI Free 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset("vendor/flatui/dist/css/vendor/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendor/flatui/dist/css/flat-ui.min.css") }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ asset("vendor/html5shiv.js") }}"></script>
      <script src="{{ asset("vendor/respond.min.js") }}"></script>
    <![endif]-->
  </head>
  <body>

  <ul class="demo-sidebar hide-on-tablets">
    <li><a href="#fui-button">Buttons</a></li>
    <li><a href="#fui-checkbox">Checkboxes</a></li>
    <li><a href="#fui-">Radio buttons</a></li>
    <li><a href="#fui-dropdown">Dropdown</a></li>
    <li><a href="#fui-input">Input</a></li>
    <li><a href="#fui-navbar">Navbar</a></li>
    <li><a href="#fui-pager">Pager</a></li>
    <li><a href="#fui-pagination">Pagination</a></li>
    <li><a href="#fui-progress">Progress</a></li>
    <li><a href="#fui-select">Select</a></li>
    <li><a href="#fui-switch">Switch</a></li>
    <li><a href="#fui-tagsinput">Tags Input</a></li>
    <li><a href="#fui-tooltip">Tooltip</a></li>
    <li><a href="#fui-slider">Slider</a></li>
    <li><a href="#fui-typeahead">Typeahead</a></li>
    <li><a href="#fui-videoplayer">Video Player</a></li>
  </ul> <!-- /nav -->

      <h1 class="demo-headline">Components</h1>
  <div class="container">
      <div id="fui-button"></div>

    <div class="demo-row">
      <div class="demo-title">
        <h3>Buttons</h3>
      </div>

      <div class="demo-content">
        <p>
          After restyling the <a href="http://getbootstrap.com/css/#buttons">Bootstrap buttons</a>, we have decided to add a new size: <code>btn-hg</code> which will be used for the main call to action buttons on the page:
        </p>
        <p class="mbl">
          <button class="btn btn-hg btn-primary">Huge Button</button>
        </p>
<pre class="prettyprint">
&lt;button class="btn btn-hg btn-primary"&gt;
Boss Button
&lt;/button&gt;
</pre>

        <p class="ptl">
          In addition, we have added <code>btn-embossed</code> to make buttons look more realistic, but we still prefer them flat.
        </p>
        <p class="mbl">
          <button class="btn btn-embossed btn-primary">Embossed Button</button>
        </p>
<pre class="prettyprint">
&lt;button class="btn btn-embossed btn-primary"&gt;
Embossed Button
&lt;/button&gt;
</pre>

        <p class="ptl">
          In some cases buttons need to become wider. Yes, we have taken care of that as well:
        </p>
        <p class="mbl">
          <button class="btn btn-wide btn-primary mrm">Save</button>
          <button class="btn btn-wide btn-default">Cancel</button>
        </p>
<pre class="prettyprint">
&lt;button class="btn btn-default btn-wide"&gt;
Cancel
&lt;/button&gt;
</pre>

        <p class="ptl">
          Another new thing is <code>btn-tip</code>. Use it when you need to highlight a part of the button text:
        </p>
        <p class="mbl">
          <button class="btn btn-primary">
            Save
            <span class="btn-tip">$300</span>
          </button>
        </p>
<pre class="prettyprint">
&lt;button class="btn btn-primary"&gt;
Save
&lt;span class="btn-tip"&gt;$300&lt;/span&gt;
&lt;/button&gt;
</pre>

        <p class="ptl">
          As usual you can set different colors:
        </p>
        <p>
            <button class="btn btn-default mrs">Default</button>
          <button class="btn btn-primary mrs">Primary</button>
          <button class="btn btn-info mrs">Info</button>
          <button class="btn btn-danger mrs">Danger</button>
        </p>
        <p class="mbl">
          <button class="btn btn-success mrs">Success</button>
          <button class="btn btn-warning mrs">Warning</button>
          <button class="btn btn-inverse mrs">Inverse</button>
        </p>
<pre class="prettyprint">
&lt;button class="btn btn-default"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-info"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;button class="btn btn-success"&gt;Success&lt;/button&gt;
&lt;button class="btn btn-warning"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-inverse"&gt;Inverse&lt;/button&gt;
</pre>

        <p>
          Button groups, toolbars, and disabled state also work as expected.
        </p>

        <div id="fui-checkbox"></div>
      </div>
    </div><!-- /.demo-row -->


    <div class="demo-row">
      <div class="demo-title">
        <h3>Checkboxes</h3>
      </div>

      <div class="demo-content">
        <p>
          Using flat style checkboxes requires a JS plugin which creates all the custom markup for us. Let's take a look:
        </p>
        <form action="#">
          <div class="row">
            <div class="col-md-6">
              <label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                Checkbox
              </label>
              <label class="checkbox" for="checkbox2">
                <input type="checkbox" value="" id="checkbox2" checked="checked" data-toggle="checkbox">
                Checkbox
              </label>
              <label class="checkbox" for="checkbox3">
                <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled="">
                Checkbox
              </label>
              <label class="checkbox" for="checkbox4">
                <input type="checkbox" value="" id="checkbox4" checked="checked" data-toggle="checkbox" disabled="">
                Checkbox
              </label>
            </div>
          </div>
        </form>

        <h6 class="ptl">The JS:</h6>
<pre class="prettyprint">
$(':checkbox').radiocheck();
</pre>

        <div class="pvm">
          <h6>Methods:</h6>
        </div>
        <p class="mbl">
          <strong>.radiocheck('toggle')</strong>
          <br/>
          toggles the checkbox state from <span class="text-info">checked</span>
          to <span class="text-info">unchecked</span> and back
        </p>
        <p class="mbl">
          <strong>.radiocheck('check')</strong>
          <br/>
          sets the checkbox state to <span class="text-info">checked</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('uncheck')</strong>
          <br/>
          sets the checkbox state to <span class="text-info">unchecked</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('disable')</strong>
          <br/>
          sets the checkbox state to <span class="text-info">disabled</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('enable')</strong>
          <br/>
          unsets the <span class="text-info">disabled</span> checkbox state
        </p>
        <p class="mbl">
          <strong>.radiocheck('indeterminate')</strong>
          <br/>
          sets the checkbox state to <span class="text-info">indeterminate</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('determinate')</strong>
          <br/>
          unsets the <span class="text-info">indeterminate</span> checkbox state
        </p>
        <p class="mbl">
          <strong>.radiocheck('destroy')</strong>
          <br/>
          destroying the checkbox cover
        </p>
<pre class="prettyprint">
$(':checkbox').radiocheck('check');
</pre>

        <div class="pbm ptl">
          <h6>Events:</h6>
        </div>
        <p class="mbl">
          <strong>.on('change.radiocheck')</strong>
          <br/>
          Fired when the checkbox state changes between
          <span class="text-info">checked</span> and
          <span class="text-info">unchecked</span>.
        </p>
        <p class="mbl">
          <strong>.on('destroyed.radiocheck')</strong>
          <br/>
          Fired when radiocheck destroys itself.
        </p>
<pre class="prettyprint">
$(':checkbox').on('change.radiocheck', function() {
// Do something
});
</pre>
        <div id="fui-radio"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->


    <div class="demo-row">
      <div class="demo-title">
        <h3>Radio buttons</h3>
      </div>

      <div class="demo-content">
        <p>
          Using flat style radio buttons requires a JS plugin which creates all the custom markup for us. Let's take a look:
        </p>
        <form action="#">
          <div class="row">
            <div class="col-md-6">
              <label class="radio" for="radio1">
                <input type="radio" name="optionsRadios1" value="" id="radio1" data-toggle="radio">
                Radio button
              </label>
              <label class="radio" for="radio2">
                <input type="radio" name="optionsRadios1" value="" id="radio2" data-toggle="radio" checked="checked" >
                Radio button
              </label>
              <label class="radio" for="radio3">
                <input type="radio" name="optionsRadios1" value="" id="radio3" data-toggle="radio" disabled="">
                Radio button
              </label>
              <label class="radio" for="radio4">
                <input type="radio" name="optionsRadios1" value="" id="radio4" data-toggle="radio" disabled="">
                Radio button
              </label>
            </div>
          </div>
        </form>

        <h6 class="ptl">The JS:</h6>
<pre class="prettyprint">
$(':radio').radiocheck();
</pre>

        <div class="pvm">
          <h6>Methods:</h6>
        </div>
        <p class="mbl">
          <strong>.radiocheck('toggle')</strong>
          <br/>
          toggles the radio button state from <span class="text-info">checked</span>
          to <span class="text-info">unchecked</span> and back
        </p>
        <p class="mbl">
          <strong>.radiocheck('check')</strong>
          <br/>
          sets the radio button state to <span class="text-info">checked</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('uncheck')</strong>
          <br/>
          sets the radio button state to <span class="text-info">unchecked</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('disable')</strong>
          <br/>
          sets the radio button state to <span class="text-info">disabled</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('enable')</strong>
          <br/>
          unsets the <span class="text-info">disabled</span> checkbox state
        </p>
        <p class="mbl">
          <strong>.radiocheck('indeterminate')</strong>
          <br/>
          sets the radio button state to <span class="text-info">indeterminate</span>
        </p>
        <p class="mbl">
          <strong>.radiocheck('determinate')</strong>
          <br/>
          unsets the <span class="text-info">indeterminate</span> checkbox state
        </p>
        <p class="mbl">
          <strong>.radiocheck('destroy')</strong>
          <br/>
          destroying the radio button cover
        </p>
<pre class="prettyprint">
$(':radio').radiocheck('check');
</pre>

        <div class="pbm ptl">
          <h6>Events:</h6>
        </div>
        <p class="mbl">
          <strong>.on('change.radiocheck')</strong>
          <br/>
          Fired when the radio button state changes.
        </p>
        <p class="mbl">
          <strong>.on('destroyed.radiocheck')</strong>
          <br/>
          Fired when radiocheck destroys cover.
        </p>
<pre class="prettyprint">
$(':radio').on('change.radiocheck', function() {
// Do something
});
</pre>

        <div id="fui-dropdown"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->
  </div><!-- /.container -->



  <div class="container">
    <div class="demo-row">
      <div class="demo-title">
        <h3>Dropdown</h3>
      </div>

      <div class="demo-content">
        <p class="mbl">
          The same <a href="http://getbootstrap.com/components/#dropdowns">Bootstrap dropdown</a> is used as part of the <code>select</code>, <code>btn-group</code>, <code>nav-tabs</code> and eventually other components to present information as a menu.
        </p>

        <div class="btn-group mrm">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Dropdown <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <button class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown">
            Dropdown <span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-inverse" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="pvl">
<pre class="prettyprint">
&lt;!-- Default skin  --&gt;
&lt;div class="btn-group"&gt;
&lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;
  Large button &lt;span class="caret"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;ul class="dropdown-menu" role="menu"&gt;
  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li class="divider"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Inverted skin  --&gt;
&lt;div class="btn-group"&gt;
&lt;button class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown"&gt;
  Large button &lt;span class="caret"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;ul class="dropdown-menu dropdown-menu-inverse" role="menu"&gt;
  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li class="divider"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
        </div>

        <div id="fui-input"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Input</h3>
      </div>

      <div class="demo-content">
        <p class="mbl">
          The restyled <a href="http://getbootstrap.com/css/#forms">Bootstrap input</a>.
        </p>

        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Enter something" class="form-control" />
          </div>
        </div>

<pre class="prettyprint mtl">
&lt;input type="text" placeholder="..." class="form-control" /&gt;
</pre>

        <p class="mbl">Add <code>.flat</code> as an additional class to completely remove the borders:</p>

        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Enter something" class="form-control flat" />
          </div>
        </div>

<pre class="prettyprint mtl">
&lt;input type="text" placeholder="..." class="form-control flat" /&gt;
</pre>

        <p class="ptl">You can have a few different sizes:</p>
        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Huge" class="form-control input-hg" />
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Large" class="form-control input-lg" />
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Default" class="form-control" />
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-5">
            <input type="text" value="" placeholder="Small" class="form-control input-sm" />
          </div>
        </div>
<pre class="prettyprint mtl">
&lt;input type="text" class="form-control input-hg" placeholder="Huge" /&gt;
&lt;input type="text" class="form-control input-lg" placeholder="Large" /&gt;
&lt;input type="text" class="form-control" placeholder="Default" /&gt;
&lt;input type="text" class="form-control input-sm" placeholder="Small" /&gt;
</pre>

        <p class="ptl">You can have an icon inside:</p>
        <div class="row">
          <div class="col-lg-5">
            <div class="form-group has-feedback">
              <input type="text" value="" placeholder="With icon" class="form-control" />
              <span class="form-control-feedback fui-check"></span>
            </div>
          </div>
        </div>
<pre class="prettyprint mtm">
&lt;div class="form-group has-feedback"&gt;
&lt;input type="text" value="" placeholder="With icon" class="form-control" /&gt;
&lt;span class="form-control-feedback fui-check"&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>

        <p class="ptl">You can have the input with append/prepend options:</p>
        <div class="row mbl">
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input class="form-control" type="text" placeholder="Prepend" />
            </div>
          </div>
        </div>

        <div class="row mbl">
          <div class="col-lg-6">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Append" />
              <span class="input-group-addon">@</span>
            </div>
          </div>
        </div>
<pre class="prettyprint mtm">
&lt;!-- Prepend --&gt;
&lt;div class="input-group"&gt;
&lt;span class="input-group-addon"&gt;@&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Prepend" /&gt;
&lt;/div&gt;

&lt;!-- Append --&gt;
&lt;div class="input-group"&gt;
&lt;input type="text" class="form-control" placeholder="Append" /&gt;
&lt;span class="input-group-addon"&gt;@&lt;/span&gt;
&lt;/div&gt;
</pre>

        <div class="ptl">
          <p>
            The different color styles and the disabled state work as expected:
          </p>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group has-error">
                <input class="form-control" type="text" placeholder="Error" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group has-warning">
                <input class="form-control" type="text" placeholder="Warning" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group has-success">
                <input class="form-control" type="text" placeholder="Success" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Disabled" disabled />
              </div>
            </div>
          </div>
        </div>

<pre class="prettyprint">
&lt;!-- Error state --&gt;
&lt;div class="form-group has-error"&gt;
&lt;input class="form-control" type="text" placeholder="Error" /&gt;
&lt;/div&gt;

&lt;!-- Warning state --&gt;
&lt;div class="form-group has-warning"&gt;
&lt;input class="form-control" type="text" placeholder="Error" /&gt;
&lt;/div&gt;

&lt;!-- Success state --&gt;
&lt;div class="form-group has-success"&gt;
&lt;input class="form-control" type="text" placeholder="Error" /&gt;
&lt;/div&gt;

&lt;!-- Disabled state --&gt;
&lt;div class="form-group"&gt;
&lt;input class="form-control" type="text" placeholder="Disabled" disabled /&gt;
&lt;/div&gt;
</pre>

        <p class="ptl mtl">
          The search form doesn't have any background color set to append/prepend:
        </p>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <div class="input-group input-group-hg input-group-rounded">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
                <input type="text" class="form-control" placeholder="Search" id="search-query-2">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" id="search-query-3">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </div>
        </div>

<pre class="prettyprint">
&lt;div class="input-group input-group-hg input-group-rounded"&gt;
&lt;span class="input-group-btn"&gt;
  &lt;button type="submit" class="btn"&gt;&lt;span class="fui-search"&gt;&lt;/span&gt;&lt;/button&gt;
&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Search" id="search-query-2"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
&lt;input type="text" class="form-control" placeholder="Search" id="search-query-3"&gt;
&lt;span class="input-group-btn"&gt;
  &lt;button type="submit" class="btn"&gt;&lt;span class="fui-search"&gt;&lt;/span&gt;&lt;/button&gt;
&lt;/span&gt;
&lt;/div&gt;
</pre>

        <div id="fui-navbar"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Navbar</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          The restyled <a href="http://getbootstrap.com/components/#navbar">Bootstrap navbar</a>.
        </p>

        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
              <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Flat UI</a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#fakelink">Products</a></li>
              <li><a href="#fakelink">Features</a></li>
             </ul>
            <form class="navbar-form navbar-right" action="#" role="search">
              <div class="form-group">
                <div class="input-group">
                  <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                  <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                  </span>
                </div>
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->

<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-default" role="navigation"&gt;
&lt;div class="navbar-header"&gt;
  &lt;button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01"&gt;
    &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
  &lt;/button&gt;
  &lt;a class="navbar-brand" href="#"&gt;Flat UI&lt;/a&gt;
&lt;/div&gt;
&lt;div class="collapse navbar-collapse" id="navbar-collapse-01"&gt;
  &lt;ul class="nav navbar-nav"&gt;
    &lt;li class="active"&gt;&lt;a href="#fakelink"&gt;Products&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#fakelink"&gt;Features&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;form class="navbar-form navbar-right" action="#" role="search"&gt;
    &lt;div class="form-group"&gt;
      &lt;div class="input-group"&gt;
        &lt;input class="form-control" id="navbarInput-01" type="search" placeholder="Search"&gt;
        &lt;span class="input-group-btn"&gt;
          &lt;button type="submit" class="btn"&gt;&lt;span class="fui-search"&gt;&lt;/span&gt;&lt;/button&gt;
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
&lt;/div>&lt;!-- /.navbar-collapse --&gt;
&lt;/nav>&lt;!-- /navbar --&gt;
</pre>

      <p class="ptl">Inverted navbar:</p>
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-02">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Flat UI</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-02">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#fakelink">Products</a></li>
            <li><a href="#fakelink">Features</a></li>
           </ul>
          <form class="navbar-form navbar-right" action="#" role="search">
            <div class="form-group">
              <div class="input-group">
                <input class="form-control" id="navbarInput-02" type="search" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->

<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-inverse" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>


      <p class="ptl">Embossed navbar:</p>
      <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-03">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Flat UI</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-03">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#fakelink">Products</a></li>
            <li><a href="#fakelink">Features</a></li>
           </ul>
          <form class="navbar-form navbar-right" action="#" role="search">
            <div class="form-group">
              <div class="input-group">
                <input class="form-control" id="navbarInput-03" type="search" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->

<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-inverse navbar-embossed" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>

      <p class="ptl">Large navbar:</p>
      <nav class="navbar navbar-default navbar-lg" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-04">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Flat UI</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-04">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#fakelink">Products</a></li>
            <li><a href="#fakelink">Features</a></li>
           </ul>
          <form class="navbar-form navbar-right" action="#" role="search">
            <div class="form-group">
              <div class="input-group">
                <input class="form-control" id="navbarInput-04" type="search" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->

<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-default navbar-lg" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>

      <p class="ptl">Inline forms:</p>
      <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
        <div class="navbar-header">
          <button data-target="#navbar-collapse-05" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a href="#" class="navbar-brand">Flat UI</a>
        </div>
        <div id="navbar-collapse-05" class="collapse navbar-collapse">
          <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" placeholder="Search" class="form-control">
            </div>
            <button class="btn btn-default" type="submit">Submit</button>
          </form>
        </div>
      </nav>

<pre class="prettyprint mvl">
&lt;form role="search" class="navbar-form navbar-left"&gt;
&lt;div class="form-group"&gt;
  &lt;input type="text" placeholder="Search" class="form-control"&gt;
&lt;/div&gt;
&lt;button class="btn btn-default" type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>

      <p class="ptl">Buttons:</p>
      <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
        <div class="navbar-header">
          <button data-target="#navbar-collapse-06" data-toggle="collapse" class="navbar-toggle" type="button">
          </button>
          <a href="#" class="navbar-brand">Flat UI</a>
        </div>
        <div id="navbar-collapse-06" class="collapse navbar-collapse">
          <button class="btn btn-default navbar-btn" type="button">Sign in</button>
          <button class="btn btn-default navbar-btn btn-sm" type="button">Sign in</button>
          <button class="btn btn-default navbar-btn btn-xs" type="button">Sign in</button>
        </div>
      </nav>

<pre class="prettyprint mvl">
&lt;!-- Default Navbar Button --&gt;
&lt;button class="btn btn-default navbar-btn" type="button"&gt;Sign in&lt;/button&gt;
&lt;!-- Small Navbar Button --&gt;
&lt;button class="btn btn-default navbar-btn btn-sm" type="button"&gt;Sign in&lt;/button&gt;
&lt;!-- Extra Small Navbar Button --&gt;
&lt;button class="btn btn-default navbar-btn btn-xs" type="button"&gt;Sign in&lt;/button&gt;
</pre>

      <p class="ptl">Text:</p>
      <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
        <div class="navbar-header">
          <button data-target="#navbar-collapse-07" data-toggle="collapse" class="navbar-toggle" type="button">
          </button>
          <a href="#" class="navbar-brand">Flat UI</a>
        </div>
        <div id="navbar-collapse-07" class="collapse navbar-collapse">
          <p class="navbar-text">Signed in as Mark Otto</p>
        </div>
      </nav>

<pre class="prettyprint mvl">
&lt;p class="navbar-text"&gt;Signed in as Mark Otto&lt;/p&gt;
</pre>

      <p class="ptl">Non-nav links:</p>
      <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
        <div class="navbar-header">
          <button data-target="#navbar-collapse-08" data-toggle="collapse" class="navbar-toggle" type="button">
          </button>
          <a href="#" class="navbar-brand">Flat UI</a>
        </div>
        <div id="navbar-collapse-08" class="collapse navbar-collapse">
          <p class="navbar-text navbar-right">Signed in as <a class="navbar-link" href="#">Mark Otto</a></p>
        </div>
      </nav>

<pre class="prettyprint mvl">
&lt;p class="navbar-text navbar-right"&gt;Signed in as &lt;a class="navbar-link" href="#"&gt;Mark Otto&lt;/a&gt;&lt;/p&gt;
</pre>

        <p class="ptl">New and Unread indicators:</p>
        <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-09">
              <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Flat UI</a>
          </div>

          <div class="collapse navbar-collapse" id="#navbar-collapse-09">
            <ul class="nav navbar-nav">
              <li><a href="#">Messages<span class="navbar-unread">1</span></a></li>
              <li><a href="#">About Us<span class="navbar-new">1</span></a></li>
             </ul>
          </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->

<pre class="prettyprint mvl">
&lt;!-- ... --&gt;
&lt;ul class="nav navbar-nav"&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;
      Menu item
      &lt;!-- Indicator with number --&gt;
      &lt;span class="navbar-new"&gt;2&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;!-- ... --&gt;
</pre>

<pre class="prettyprint mvl">
&lt;!-- ... --&gt;
&lt;ul class="nav navbar-nav"&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;
      Menu item
      &lt;!-- Indicator without number --&gt;
      &lt;span class="navbar-unread"&gt;&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;!-- ... --&gt;
</pre>

        <p class="ptl">Fixed to top:</p>
<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-default navbar-fixed-top" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>

        <p class="ptl">Fixed to bottom:</p>
<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-default navbar-fixed-bottom" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>

        <p class="ptl">Static top:</p>
<pre class="prettyprint mvl">
&lt;nav class="navbar navbar-default navbar-static-top" role="navigation"&gt;
&lt;!-- Navbar content --&gt;
&lt;/nav&gt;
</pre>

        <div id="fui-pager"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->


    <div class="demo-row">
      <div class="demo-title">
        <h3>Pager</h3>
      </div>
      <div class="demo-content">
        <p>
          Short pagination where links have a button look. Used for navigating to the next/prev item.
        </p>
        <ul class="pager">
          <li class="previous">
            <a href="#fakelink">
              <i class="fui-arrow-left"></i>
              <span>All messages</span>
            </a>
          </li>
          <li class="next">
            <a href="#fakelink">
              <i class="fui-arrow-right"></i>
            </a>
          </li>
        </ul>

<pre class="prettyprint mvl">
&lt;ul class="pager"&gt;
&lt;li class="previous"&gt;
  &lt;a href="#"&gt;
    &lt;span&gt;
      &lt;i class="fui-arrow-left"&gt;&lt;/i&gt;
      All messages
    &lt;/span&gt;
  &lt;/a&gt;
&lt;/li&gt;

&lt;li class="next"&gt;
  &lt;a href="#"&gt;
    &lt;i class="fui-arrow-right"&gt;&lt;/i&gt;
  &lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>
        <div id="fui-pagination"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->


    <div class="demo-row">
      <div class="demo-title">
        <h3>Pagination</h3>
      </div>
      <div class="demo-content">
        <p>
          The restyled <a href="http://getbootstrap.com/components/#pagination">Bootstrap pagination</a>. We have added a dropdown navigation, a minimalistic look and a text-only look. We have also added a few color schemes with an alternative layout.
        </p>
        <div class="pagination">
          <ul>
            <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
            <li class="active"><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
            <li><a href="#fakelink">6</a></li>
            <li><a href="#fakelink">7</a></li>
            <li><a href="#fakelink">8</a></li>
            <li><a href="#fakelink">9</a></li>
            <li><a href="#fakelink">10</a></li>
            <li class="pagination-dropdown dropup">
              <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fui-triangle-up"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#fakelink">10–20</a></li>
                <li><a href="#fakelink">20–30</a></li>
                <li><a href="#fakelink">40–50</a></li>
              </ul>
            </li>
            <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
          </ul>
        </div>

<pre class="prettyprint mvl">
&lt;div class="pagination"&gt;
&lt;ul&gt;
  &lt;li class="previous"&gt;
    &lt;a href="#" class="fui-arrow-left"&gt;&lt;/a&gt;
  &lt;/li&gt;

  &lt;!-- Make dropdown appear above pagination --&gt;
  &lt;li class="pagination-dropdown dropup"&gt;
    &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
      &lt;i class="fui-triangle-up"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;!-- Dropdown menu --&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;
        &lt;a href="#"&gt;10-20&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;

  &lt;li class="next"&gt;
    &lt;a href="#" class="fui-arrow-right"&gt;&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

        <p class="mtl ptl">The minimal look:</p>
        <div class="pagination pagination-minimal">
          <ul>
            <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
            <li class="active"><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
            <li><a href="#fakelink">6</a></li>
            <li><a href="#fakelink">7</a></li>
            <li><a href="#fakelink">8</a></li>
            <li><a href="#fakelink">9</a></li>
            <li><a href="#fakelink">10</a></li>
            <li class="pagination-dropdown dropup">
              <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fui-triangle-up"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#fakelink">10–20</a></li>
                <li><a href="#fakelink">20–30</a></li>
                <li><a href="#fakelink">40–50</a></li>
              </ul>
            </li>
            <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
          </ul>
        </div>

<pre class="prettyprint mvl">
&lt;div class="pagination pagination-minimal"&gt;
&lt;/div&gt;
</pre>

        <p class="mvl ptl">The text look:</p>
        <ul class="pagination-plain">
          <li class="previous"><a href="#fakelink">← Previous</a></li>
          <li><a href="#fakelink">1</a></li>
          <li><a href="#fakelink">2</a></li>
          <li><a href="#fakelink">3</a></li>
          <li><a href="#fakelink">4</a></li>
          <li class="active"><a href="#fakelink">5</a></li>
          <li><a href="#fakelink">6</a></li>
          <li><a href="#fakelink">7</a></li>
          <li><a href="#fakelink">8</a></li>
          <li><a href="#fakelink">9</a></li>
          <li><a href="#fakelink">10</a></li>
          <li class="next"><a href="#fakelink">Newer →</a></li>
        </ul>

<pre class="prettyprint mvl">
&lt;ul class="pagination-plain"&gt;
&lt;li class="previous"&gt;
  &lt;a href="#"&gt;Previous&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;
  &lt;a href="#"&gt;1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="next"&gt;
  &lt;a href="#"&gt;Newer&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>

        <p class="mvl ptl">The various color schemes:</p>
        <div class="pagination pagination-danger">
          <a href="#fakelink" class="btn btn-danger previous">
            <i class="fui-arrow-left"></i>
            OLDER
          </a>
          <ul>
            <li><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
          </ul>
          <a href="#fakelink" class="btn btn-danger next">
            NEWER
            <i class="fui-arrow-right"></i>
          </a>
        </div> <!-- /pagination -->

        <div class="pagination pagination-success">
          <a href="#fakelink" class="btn btn-success previous">
            <i class="fui-arrow-left"></i>
            OLDER
          </a>
          <ul>
            <li><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
          </ul>
          <a href="#fakelink" class="btn btn-success next">
            NEWER
            <i class="fui-arrow-right"></i>
          </a>
        </div> <!-- /pagination -->

        <div class="pagination pagination-warning">
          <a href="#fakelink" class="btn btn-warning previous">
            <i class="fui-arrow-left"></i>
            OLDER
          </a>
          <ul>
            <li><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
          </ul>
          <a href="#fakelink" class="btn btn-warning next">
            NEWER
            <i class="fui-arrow-right"></i>
          </a>
        </div>

        <div class="pagination pagination-info">
          <a href="#fakelink" class="btn btn-info previous">
            <i class="fui-arrow-left"></i>
            OLDER
          </a>
          <ul>
            <li><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
          </ul>
          <a href="#fakelink" class="btn btn-info next">
            NEWER
            <i class="fui-arrow-right"></i>
          </a>
        </div> <!-- /pagination -->

        <div class="pagination pagination-inverse">
          <a href="#fakelink" class="btn btn-inverse previous">
            <i class="fui-arrow-left"></i>
            OLDER
          </a>
          <ul>
            <li><a href="#fakelink">1</a></li>
            <li><a href="#fakelink">2</a></li>
            <li><a href="#fakelink">3</a></li>
            <li><a href="#fakelink">4</a></li>
            <li><a href="#fakelink">5</a></li>
          </ul>
          <a href="#fakelink" class="btn btn-inverse next">
            NEWER
            <i class="fui-arrow-right"></i>
          </a>
        </div> <!-- /pagination -->

<pre class="prettyprint mvl">
&lt;div class="pagination pagination-success"&gt;
&lt;a href="#" class="btn btn-success previous"&gt;Previous&lt;/a&gt;

&lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;a href="#" class="btn btn-success next"&gt;Next&lt;/a&gt;
&lt;/div&gt;
</pre>

        <div id="fui-progress"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->


    <div class="demo-row">
      <div class="demo-title">
        <h3>Progress</h3>
      </div>
      <div class="demo-content">
        <p>
          The restyled <a href="http://getbootstrap.com/components/#progress">Bootstrap progress</a>.
        </p>
        <div class="progress">
          <div class="progress-bar" style="width: 45%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: 40%;"></div>
          <div class="progress-bar progress-bar-warning" style="width: 10%;"></div>
          <div class="progress-bar progress-bar-danger" style="width: 10%;"></div>
          <div class="progress-bar progress-bar-success" style="width: 10%;"></div>
          <div class="progress-bar progress-bar-info" style="width: 10%;"></div>
        </div>

<pre class="prettyprint mvl">
&lt;div class="progress"&gt;
&lt;div class="progress-bar" style="width: 40%;"&gt;&lt;/div&gt;
&lt;div class="progress-bar progress-bar-warning" style="width: 10%;"&gt;&lt;/div&gt;
&lt;div class="progress-bar progress-bar-danger" style="width: 10%;"&gt;&lt;/div&gt;
&lt;div class="progress-bar progress-bar-success" style="width: 10%;"&gt;&lt;/div&gt;
&lt;div class="progress-bar progress-bar-info" style="width: 10%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
        <div id="fui-select"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Select</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          We have made a custom select due to the inability of styling the system one. It is based on the <a href="http://ivaynberg.github.io/select2/">Select2</a> plug-in with the source slightly modified to meet Bootstrap naming convention.
        </p>
        <p class="mbl">
          The component inherits its entire style from the button so you can use all its colors and sizes without any problems. We have also supported the <span class="text-info">multiple</span> select state as well as the <span class="text-info">block</span> mode where it takes all the available space.
        </p>
        <p class="mbl pbl">
          Grids are supported here as&nbsp;well. For more technical details read the <a href="http://ivaynberg.github.io/select2/#documentation">original&nbsp;documentation</a>.
        </p>

        <select class="form-control select select-primary mbl" data-toggle="select">
          <optgroup label="Profile">
            <option value="0">My Profile</option>
            <option value="1">My Friends</option>
          </optgroup>
          <optgroup label="System">
            <option value="2">Messages</option>
            <option value="3">My Settings</option>
            <option value="4">Logout</option>
          </optgroup>
        </select>

        <br>

        <select multiple="multiple" class="form-control multiselect multiselect-info mbl" data-toggle="select">
          <option value="0">1</option>
          <option value="1" selected>2</option>
          <option value="2" selected>3</option>
          <option value="3" selected>4</option>
          <option value="4">5</option>
        </select>

        <p class="mvl">
          You can write the markup as you would normally do, without any difference:
        </p>

<pre class="prettyprint mvl">
&lt;select class="form-control select select-primary select-block mbl"&gt;
&lt;optgroup label="Profile"&gt;
  &lt;option value="0"&gt;My Profile&lt;/option&gt;
  &lt;option value="1"&gt;My Friends&lt;/option&gt;
&lt;/optgroup&gt;
&lt;optgroup label="System"&gt;
  &lt;option value="2"&gt;Messages&lt;/option&gt;
  &lt;option value="3"&gt;My Settings&lt;/option&gt;
  &lt;option value="4"&gt;Logout&lt;/option&gt;
&lt;/optgroup&gt;
&lt;/select&gt;

&lt;select multiple="multiple" class="form-control multiselect multiselect-info"&gt;
&lt;option value="0"&gt;1&lt;/option&gt;
&lt;option value="1" selected&gt;2&lt;/option&gt;
&lt;option value="2" selected&gt;3&lt;/option&gt;
&lt;option value="3" selected&gt;4&lt;/option&gt;
&lt;option value="4"&gt;5&lt;/option&gt;
&lt;/select&gt;
</pre>

        <p class="mvl ptl">
          Then transform all the system selects into custom ones with JS:
        </p>

<pre class="prettyprint mvl">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});

// dropdownCssClass: dropdown class name

// You can always select by any other attribute, not just tag name.
// Also you can leave selectpicker arguments blank to apply defaults.
</pre>
        <div id="fui-switch"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Switch</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          You can use a custom switch instead of a checkbox. It can have 2 styles: <span class="text-info">circle</span> (default) and <span class="text-info">square</span>. Drag functionality is also supported.
        </p>
        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" id="custom-switch-01" />
        </span>
        <input type="checkbox" data-toggle="switch" name="switch-02"  id="custom-switch-02" />

        <hr/>

        <span class="bootstrap-switch-square mrl">
          <input type="checkbox" data-toggle="switch" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>" name="switch-03" id="custom-switch-03" />
        </span>

        <span class="bootstrap-switch-square">
          <input type="checkbox" checked data-toggle="switch" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>" name="switch-04" id="custom-switch-04" />
        </span>

<pre class="prettyprint mvl">
&lt;!-- Default switch --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" /&gt;

&lt;!-- Square switch --&gt;
&lt;div class="bootstrap-switch-square"&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" /&gt;
&lt;/div&gt;
</pre>

        <p class="mbl">The switch can have various color schemes:</p>

        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" name="switch-05" data-on-color="primary" id="custom-switch-05" />
        </span>

        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" name="switch-06" data-on-color="info" id="custom-switch-06" />
        </span>

        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" name="switch-07" data-on-color="success" id="custom-switch-07" />
        </span>

        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" name="switch-08" data-on-color="warning" id="custom-switch-08" />
        </span>

        <input type="checkbox" checked data-toggle="switch" name="switch-09" data-on-color="danger" id="custom-switch-09" />

<pre class="prettyprint mvl">
&lt;!-- Primary / Default --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="default-switch-colors" data-on-color="primary" data-off-color="default" id="switch-03" /&gt;

&lt;!-- Info / Default --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="info-square-switch" data-on-color="info" id="switch-04" /&gt;

&lt;!-- Success / Default --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="info-square-switch" data-on-color="success" id="switch-05" /&gt;

&lt;!-- Warning / Default --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="info-square-switch" data-on-color="warning" id="switch-06" /&gt;

&lt;!-- Danger / Default --&gt;
&lt;input type="checkbox" checked data-toggle="switch" name="info-square-switch" data-on-color="danger" id="switch-07" /&gt;
</pre>

        <p class="mbl">You can change the colors programmatically:</p>

<pre class="prettyprint mvl">
$('#change-color-switch').bootstrapSwitch('onColor', 'success');
$('#change-color-switch').bootstrapSwitch('offColor', 'danger');
</pre>

        <p class="mbl">Disabled state:</p>

        <span class="mrl">
          <input type="checkbox" checked data-toggle="switch" name="switch-10" disabled id="custom-switch-10" />
        </span>

<pre class="prettyprint mvl">
&lt;input type="checkbox" checked disabled data-toggle="switch" name="custom-switch-disabled" id="switch-08" /&gt;
&lt;input type="checkbox" checked readonly data-toggle="switch" name="custom-switch-readonly" id="switch-09" /&gt;
</pre>

        <p class="mbl">API for managing the state:</p>

<pre class="prettyprint mvl">
$('#disable-switch').bootstrapSwitch('disabled'); // getter
$('#disable-switch').bootstrapSwitch('toggleDisabled'); // toggle readonly state
$('#disable-switch').bootstrapSwitch('disabled', true);  // setter, true || false

$('#readonly-switch').bootstrapSwitch('readonly'); // getter
$('#readonly-switch').bootstrapSwitch('toggleReadonly'); // toggle readonly state
$('#readonly-switch').bootstrapSwitch('readonly', true);  // setter, true || false
</pre>

        <p class="mbl">You can change the handler text:</p>

        <input type="checkbox" checked data-toggle="switch" name="switch-12" data-on-text="Ag" data-off-text="Au" id="custom-switch-12" />

<pre class="prettyprint mvl">
&lt;input type="checkbox" checked data-toggle="switch" name="custom-switch-text" data-on-text="Ag" data-off-text="Au" id="switch-10" /&gt;
</pre>

        <p class="mbl">You can do this programmaticaly as well:</p>

<pre class="prettyprint mvl">
$('#label-switch').bootstrapSwitch('onText', 'Au');
$('#label-switch').bootstrapSwitch('offText', 'Ag');
</pre>

        <p class="mbl">Use icons insted of text on handlers:</p>

        <div class="bootstrap-switch-square">
          <input type="checkbox" checked data-toggle="switch" name="switch-13" data-on-text="<i class='fui-check'></i>" data-off-text="<i class='fui-cross'></i>" id="custom-switch-13" />
        </div>

<pre class="prettyprint mvl">
&lt;!-- Square switch with customized icons --&gt;
&lt;div class="bootstrap-switch-square"&gt;
&lt;input type="checkbox" data-on-text="&lt;i class=&#039;fui-check&#039;&gt;&lt;/i&gt;" data-off-text="&lt;i class=&#039;fui-cross&#039;&gt;&lt;/i&gt;" name="custom-square-switch-icons" id="switch-11" /&gt;
&lt;/div&gt;
</pre>

        <p class="mbl">For more technical details read the <a href="http://bootstrap-switch.org">original documentation</a>.</p>

        <p class="mbl pbl"><strong>Note:</strong> <span class="text-info">Label text</span> and <span class="text-info">switch sizing</span> are not supported.</p>

        <div id="fui-tagsinput"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Tags input</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          Used for managing multiple tags with the ability to add a new one and to remove or validate an existing one. It is available in 2 color schemes: grey (default) and primary.
        </p>
        <p class="mbl pbl">
          This component is based on <a href="http://timschlechter.github.io/bootstrap-tagsinput/examples/bootstrap3/">Bootstrap Tags Input</a>.
        </p>

        <input name="tagsinput-01" class="tagsinput" data-role="tagsinput" value="Clean, Fresh, Modern, Unique" />
        <div class="tagsinput-primary">
          <input name="tagsinput-02" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" />
        </div>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;!-- Default tags input --&gt;
&lt;input name="tagsinput" class="tagsinput" data-role="tagsinput" value="Clean, Fresh, Modern, Unique" /&gt;

&lt;!-- Primary tags input --&gt;
&lt;div class="tagsinput-primary"&gt;
&lt;input name="tagsinput" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" /&gt;
&lt;/div&gt;
</pre>

        <p class="mbl">
          Use data attribute <code>data-role="tagsinput"</code> on input to initialize the plugin.
        </p>

<pre class="prettyprint mvl">
&lt;input name="tagsinput" class="tagsinput" data-role="tagsinput" value="Clean, Fresh, Modern, Unique" /&gt;
</pre>

        <p class="mbl">You can also do this using JavaScript:</p>

<pre class="prettyprint mvl">
$(".tagsinput").tagsinput();
</pre>

        <p class="mbl pbl">For more technical details read the <a href="http://timschlechter.github.io/bootstrap-tagsinput/examples/bootstrap3/">official plugin&nbsp;documentation</a>.</p>

        <div id="fui-tooltip"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

          <div id="fui-tooltip" class="pbl"></div>

    <div class="demo-row">
      <div class="demo-title">
        <h3>Tooltip</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          Restyled <a href="http://getbootstrap.com/javascript/#tooltips">Bootstrap tooltip</a>.
        </p>

        <div style="width: 40%; padding-left: 10px; height: 60px;">
          <div class="demo-tooltips">
            <p data-toggle="tooltip" title="Here is a sample of a long dark tooltip. Hell yeah."></p>
          </div>
        </div> <!-- /tooltips -->

<pre class="prettyprint mvl">
&lt;p data-toggle="tooltip" title="Tooltip copy"&gt;&lt;/p&gt;
</pre>

        <div id="fui-slider"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Slider</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          The restyled <a href="http://jqueryui.com/slider">jQuery UI slider</a> with added slider segments.
        </p>

        <div id="slider"></div>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;div id="slider"&gt;&lt;/div&gt;
</pre>

        <p class="ptl">The JS:</p>

<pre class="prettyprint mvl">
var $slider = $("#slider");
if ($slider.length > 0) {
$slider.slider({
  min: 1,
  max: 5,
  value: 3,
  orientation: "horizontal",
  range: "min"
}).addSliderSegments($slider.slider("option").max);
}
</pre>

        <p class="pvl">How does <span class="text-info">addSliderSegments()</span> work?</p>
        <p>This is an extended jQuery method placed in the <code>application.js</code> file. It calculates how many segments to append to the slider by looking at a <span class="text-info">slider("option").max</span> which shows a maximum slider value.</p>

<pre class="prettyprint mvl">
// Add segments to a slider
$.fn.addSliderSegments = function (amount, orientation) {
return this.each(function () {
  if (orientation == "vertical") {
    var output = ''
      , i;
    for (i = 1; i &lt;= amount - 2; i++) {
      output += '&lt;div class="ui-slider-segment" style="top:' + 100 / (amount - 1) * i + '%;"&gt;&lt;/div&gt;';
    };
    $(this).prepend(output);
  } else {
    var segmentGap = 100 / (amount - 1) + "%"
      , segment = '&lt;div class="ui-slider-segment" style="margin-left: ' + segmentGap + ';"&gt;&lt;/div&gt;';
    $(this).prepend(segment.repeat(amount - 2));
  }
});
};
</pre>

        <p class="pvl">Vertical slider:</p>

        <div class="pbl">
          <div id="vertical-slider" style="height: 200px;"></div>
        </div>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;div id="vertical-slider" style="height: 200px;"&gt;&lt;/div&gt;
</pre>

        <p class="ptl">The JS:</p>

<pre class="prettyprint mvl">
var $verticalSlider = $("#vertical-slider");
if ($verticalSlider.length) {
$verticalSlider.slider({
  min: 1,
  max: 5,
  value: 3,
  orientation: "vertical",
  range: "min"
}).addSliderSegments($verticalSlider.slider("option").max, "vertical");
}
</pre>
<p class="pvl">Custom slider values:</p>

        <div class="pbl">
          <div id="slider3">
            <span class="ui-slider-value first"></span>
            <span class="ui-slider-value last"></span>
          </div>
        </div>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;div id="slider3"&gt;
&lt;span class="ui-slider-value first"&gt;&lt;/span&gt;
&lt;span class="ui-slider-value last"&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>

        <p class="ptl">The JS:</p>

<pre class="prettyprint mvl">
var $slider3 = $("#slider3")
, slider3ValueMultiplier = 100
, slider3Options;

if ($slider3.length > 0) {
$slider3.slider({
  min: 1,
  max: 5,
  values: [3, 4],
  orientation: "horizontal",
  range: true,
  slide: function(event, ui) {
    $slider3.find(".ui-slider-value:first")
      .text("$" + ui.values[0] * slider3ValueMultiplier)
      .end()
      .find(".ui-slider-value:last")
      .text("$" + ui.values[1] * slider3ValueMultiplier);
  }
});

slider3Options = $slider3.slider("option");
$slider3.addSliderSegments(slider3Options.max)
  .find(".ui-slider-value:first")
  .text("$" + slider3Options.values[0] * slider3ValueMultiplier)
  .end()
  .find(".ui-slider-value:last")
  .text("$" + slider3Options.values[1] * slider3ValueMultiplier);
}
</pre>
        <div id="fui-typeahead"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Typeahead</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          The restyled <a href="http://twitter.github.io/typeahead.js">Twitter Typeahead</a>.
        </p>

        <p class="ptl">Example:</p>

        <div class="form-group">
          <input class="form-control" type="text" id="typeahead-demo-01" />
        </div>

        <p class="ptl">To launch Typeahead you need to include the following scripts:</p><br>
        <ul>
          <li><code>typeahead.jquery.js</code> &mdash; UI view</li>
          <li><code>bloodhound.js</code> &mdash; suggestion engine</li>
        </ul>
        <p>You may include these files separeately, or you can include the only <code>typeahead.bundle.js</code>(which contains both <code>bloodhound.js</code> and <code>typeahead.jquery.js</code>)</p>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;div class="form-group"&gt;
&lt;input class="form-control" type="text" id="typeahead-demo-01" /&gt;
&lt;/div&gt;
</pre>

        <p class="ptl">The JS:</p>
<pre class="prettyprint mvl">
var states = new Bloodhound({
datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.word); },
queryTokenizer: Bloodhound.tokenizers.whitespace,
limit: 4,
local: [
  { word: "Alabama" },
  { word: "Alaska" },
  { word: "Arizona" },
  { word: "Arkansas" },
  { word: "California" },
  { word: "Colorado" }
]
});

states.initialize();

$('#typeahead-demo-01').typeahead(null, {
name: 'states',
displayKey: 'word',
source: states.ttAdapter()
});
</pre>

        <p class="ptl">Useful Resources: <a href="http://twitter.github.io/typeahead.js/examples/">Examples</a>, <a href="https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md">Typeahead docs</a>, <a href="https://github.com/twitter/typeahead.js/blob/master/doc/bloodhound.md">Bloodhound docs</a>.</p>

        <div id="fui-videoplayer"></div>
      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

    <div class="demo-row">
      <div class="demo-title">
        <h3>Video player</h3>
      </div>
      <div class="demo-content">
        <p class="mbl">
          The restyled <a href="http://www.videojs.com/">Video.js HTML5 video player</a>.
        </p>

        <p class="ptl">Example:</p>

        <video class="video-js" preload="auto" poster="assets/img/video/poster.jpg" data-setup="{}">
          <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4">
          <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm">
        </video>

        <p class="ptl">The markup:</p>

<pre class="prettyprint mvl">
&lt;video class="video-js" preload="auto" poster="assets/img/video/poster.jpg" data-setup="{}"&gt;
&lt;source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4"&gt;
&lt;source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm"&gt;
&lt;/video&gt;
</pre>

        <p class="ptl">To have a working video player you need to include the JS file <code>video-js.js</code> and SWF file <code>video-js.swf</code>. You can do it in 2 ways:</p>

        <p class="ptl">Include a CDN version in your page(swf file will be downloaded automaticaly from CDN):</p>

<pre class="prettyprint mvl">
&lt;script src="//vjs.zencdn.net/4.7/video.js"&gt;&lt;/script&gt;
</pre>

        <p class="ptl">Include a self hosted version of <code>flat-ui-pro.js</code> and seth path to SWF file:</p>

<pre class="prettyprint mvl">
&lt;script src="//example.com/path/to/flat-ui-pro.js">&lt;/script&gt;
&lt;script&gt;
videojs.options.flash.swf = "http://example.com/path/to/video-js.swf"
&lt;/script&gt;
</pre>

        <p class="ptl">The file <code>video-js.swf</code> can be found in <code>../dist/js/vendor/</code> folder</p>


      <p class="ptl">Useful Resources: <a href="https://github.com/videojs/video.js/blob/stable/index.md">Video.js docs</a></p>

      </div> <!-- /.demo-content -->
    </div> <!-- /.demo-row -->

  </div><!-- /.container -->




    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{ asset("vendor/flatui/dist/js/vendor/jquery.min.js") }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset("vendor/flatui/dist/js/flat-ui.min.js") }}"></script>
    <script src="{{ asset("vendor/flatui/js/radiocheck.js") }}"></script>
  </body>
</html>
