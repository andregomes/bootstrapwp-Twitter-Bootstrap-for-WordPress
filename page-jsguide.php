<?php
/**
 * Template Name: Javascript Guide, no sidebar
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.7
 * 
 * Last Revised: February 22, 2012
 * 
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
      <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1>Javascript for Bootstrap</h1>
        <p class="lead">Bring Bootstrap's components to life&mdash;now with 12 custom <a href="http://jquery.com/" target="_blank">jQuery</a> plugins.
         <div class="subnav">
          <ul class="nav nav-pills">
            <li><a href="#javascript">All plugins</a></li>
            <li><a href="#modals">Modal</a></li>
            <li><a href="#dropdowns">Dropdown</a></li>
            <li><a href="#scrollspy">Scrollspy</a></li>
            <li><a href="#tabs">Tab</a></li>
            <li><a href="#tooltips">Tooltip</a></li>
            <li><a href="#popovers">Popover</a></li>
            <li><a href="#alerts">Alert</a></li>
            <li><a href="#buttons">Button</a></li>
            <li><a href="#collapse">Collapse</a></li>
            <li><a href="#carousel">Carousel</a></li>
            <li><a href="#typeahead">Typeahead</a></li>
          </ul>
        </div>
      </header>


      <!-- Using Javascript w/ Bootstrap
      ================================================== -->
      <section id="javascript">
        <div class="page-header">
          <h1>jQuery plugins <small>A dozen Bootstrap plugins to get you started</small></h1>
          <h2>NOTE: This page is a DEMO ONLY! All the JS files are loaded in functions.php - you should DISABLE any that you are not going to use in your theme.</h2>
        </div>
      <div class="row">
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#modals">Modals</a></h3>
            <p>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#dropdowns">Dropdowns</a></h3>
            <p>Add dropdown menus to nearly anything in Bootstrap with this simple plugin. Bootstrap features full dropdown menu support on in the navbar, tabs, and pills.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#scrollspy">Scrollspy</a></h3>
            <p>Use scrollspy to automatically update the links in your navbar to show the current active link based on scroll position.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#tabs">Togglable tabs</a></h3>
            <p>Use this plugin to make tabs and pills more useful by allowing them to toggle through tabbable panes of local content.</p>
          </label>
        </div>
      </div> <!-- /row -->
      <div class="row">
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#tooltips">Tooltips</a></h3>
            <p>A new take on the jQuery Tipsy plugin, Tooltips don't rely on images&mdash;they use CSS3 for animations and data-attributes for local title storage.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#popovers">Popovers</a> <small class="muted">*</small></h3>
            <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
            <p class="muted"><strong>*</strong> Requires <a href="#tooltips">Tooltips</a> to be included</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#alerts">Alert messages</a></h3>
            <p>The alert plugin is a tiny class for adding close functionality to alerts.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#buttons">Buttons</a></h3>
            <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
          </label>
        </div>
      </div> <!-- /row -->
      <div class="row" style="margin-bottom: 9px;">
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#collapse">Collapse</a></h3>
            <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#carousel">Carousel</a></h3>
            <p>Create a merry-go-round of any content you wish to provide an interactive slideshow of content.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3><a href="./javascript.html#typeahead">Typeahead</a></h3>
            <p>A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.</p>
          </label>
        </div>
        <div class="span3">
          <label>
            <h3>Transitions <small class="muted">*</small></h3>
            <p>For simple transition effects, include bootstrap-transition.js once to slide in modals or fade out alerts.</p>
            <p class="muted"><strong>*</strong> Required for animation in plugins</p>
          </label>
        </div>
      </div> <!-- /row -->
      <div class="alert alert-info"><strong>Heads up!</strong> All javascript plugins require the latest version of jQuery.</div>
    </section>



    <!-- Modal
    ================================================== -->
    <section id="modals">
      <div class="page-header">
        <h1>Modals <small>bootstrap-modal.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About modals</h3>
          <p>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</p>
          <a href="assets/js/bootstrap-modal.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Static example</h2>
          <p>Below is a statically rendered modal.</p>
          <div class="well modal-example" style="background-color: #888; border: none;">
            <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
              <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">&times;</a>
                <h3>Modal header</h3>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-primary">Save changes</a>
                <a href="#" class="btn">Close</a>
              </div>
            </div>
          </div> <!-- /well -->

          <h2>Live demo</h2>
          <p>Toggle a modal via javascript by clicking the button below. It will slide down and fade in from the top of the page.</p>
          <!-- sample modal content -->
          <div id="myModal" class="modal hide fade">
            <div class="modal-header">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3>Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" class="btn popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on hover.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-primary">Save changes</a>
              <a href="#" class="btn" data-dismiss="modal" >Close</a>
            </div>
          </div>
          <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>

          <hr>

          <h2>Using bootstrap-modal</h2>
          <p>Call the modal via javascript:</p>
          <pre class="prettyprint linenums">$('#myModal').modal(options)</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>backdrop</td>
               <td>boolean</td>
               <td>true</td>
               <td>Includes a modal-backdrop element</td>
             </tr>
             <tr>
               <td>keyboard</td>
               <td>boolean</td>
               <td>true</td>
               <td>Closes the modal when escape key is pressed</td>
             </tr>
             <tr>
               <td>show</td>
               <td>boolean</td>
               <td>true</td>
               <td>Shows the modal when initialized.</td>
             </tr>
            </tbody>
          </table>
          <h3>Markup</h3>
          <p>You can activate modals on your page easily without having to write a single line of javascript. Just set <code>data-toggle="modal"</code> on a controller element with a <code>data-target="#foo"</code> or <code>href="#foo"</code> which corresponds to a modal element id, and when clicked, it will launch your modal.</p>
          <p>Also, to add options to your modal instance, just include them as additional data attributes on either the control element or the modal markup itself.</p>
<pre class="prettyprint linenums">
&lt;a class="btn" data-toggle="modal" href="#myModal" &gt;Launch Modal&lt;/a&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class="modal"&gt;
  &lt;div class="modal-header"&gt;
    &lt;a class="close" data-dismiss="modal"&gt;&times;&lt;/a&gt;
    &lt;h3&gt;Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;One fine body…&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Save changes&lt;/a&gt;
    &lt;a href="#" class="btn"&gt;Close&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
          <div class="alert alert-info">
            <strong>Heads up!</strong> If you want your modal to animate in and out, just add a <code>.fade</code> class to the <code>.modal</code> element (refer to the demo to see this in action) and include bootstrap-transition.js.
          </div>
          <h3>Methods</h3>
          <h4>.modal(options)</h4>
          <p>Activates your content as a modal. Accepts an optional options <code>object</code>.</p>
<pre class="prettyprint linenums">
$('#myModal').modal({
  keyboard: false
})</pre>
          <h4>.modal('toggle')</h4>
          <p>Manually toggles a modal.</p>
          <pre class="prettyprint linenums">$('#myModal').modal('toggle')</pre>
          <h4>.modal('show')</h4>
          <p>Manually opens a modal.</p>
          <pre class="prettyprint linenums">$('#myModal').modal('show')</pre>
          <h4>.modal('hide')</h4>
          <p>Manually hides a modal.</p>
          <pre class="prettyprint linenums">$('#myModal').modal('hide')</pre>
          <h3>Events</h3>
          <p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td>This event fires immediately when the <code>show</code> instance method is called.</td>
             </tr>
             <tr>
               <td>shown</td>
               <td>This event is fired when the modal has been made visible to the user (will wait for css transitions to complete).</td>
             </tr>
             <tr>
               <td>hide</td>
               <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
             </tr>
             <tr>
               <td>hidden</td>
               <td>This event is fired when the modal has finished being hidden from the user (will wait for css transitions to complete).</td>
             </tr>
            </tbody>
          </table>

<pre class="prettyprint linenums">
$('#myModal').on('hidden', function () {
  // do something…
})</pre>
        </div>
      </div>
    </section>



    <!-- Dropdown
    ================================================== -->
    <section id="dropdowns">
      <div class="page-header">
        <h1>Dropdowns <small>bootstrap-dropdown.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About dropdowns</h3>
          <p>Add dropdown menus to nearly anything in Bootstrap with this simple plugin. Bootstrap features full dropdown menu support on in the navbar, tabs, and pills.</p>
          <a href="assets/js/bootstrap-dropdown.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Examples</h2>
          <p>Click on the dropdown nav links in the navbar and pills below to test dropdowns.</p>
          <div id="navbar-example" class="navbar navbar-static">
            <div class="navbar-inner">
              <div class="container" style="width: auto;">
                <a class="brand" href="#">Project Name</a>
                <ul class="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav pull-right">
                  <li id="fat-menu" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div> <!-- /navbar-example -->

          <ul class="nav nav-pills">
            <li class="active"><a href="#">Regular link</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
              <ul id="menu1" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
              <ul id="menu2" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
              <ul id="menu3" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul> <!-- /tabs -->

          <hr>

          <h2>Using bootstrap-dropdown.js</h2>
          <p>Call the dropdowns via javascript:</p>
          <pre class="prettyprint linenums">$('.dropdown-toggle').dropdown()</pre>
          <h3>Markup</h3>
          <p>To quickly add dropdown functionality to any element just add <code>data-toggle="dropdown"</code> and any valid bootstrap dropdown will automatically be activated.</p>
          <div class="alert alert-info">
            <strong>Heads up!</strong> You may optionally target a specific dropdown by using <code>data-target="#fat"</code> or <code>href="#fat"</code>.
          </div>

<pre class="prettyprint linenums">
&lt;ul class="nav pills"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li class="dropdown" id="menu1"&gt;
    &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#menu1"&gt;
      Dropdown
      &lt;b class="caret"&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li class="divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;</pre>
          <h3>Methods</h3>
          <h4>$().dropdown()</h4>
          <p>A programatic api for activating menus for a given navbar or tabbed navigation.</p>
        </div>
      </div>
    </section>



   <!-- ScrollSpy
    ================================================== -->
    <section id="scrollspy">
      <div class="page-header">
        <h1>ScrollSpy <small>bootstrap-scrollspy.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position.</p>
          <a href="assets/js/bootstrap-scrollspy.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example navbar with scrollspy</h2>
          <p>Scroll the area below and watch the navigation update. The dropdown sub items will be highlighted as well. Try it!</p>
          <div id="navbarExample" class="navbar navbar-static">
            <div class="navbar-inner">
              <div class="container" style="width: auto;">
                <a class="brand" href="#">Project Name</a>
                <ul class="nav">
                  <li><a href="#fat">@fat</a></li>
                  <li><a href="#mdo">@mdo</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#one">one</a></li>
                      <li><a href="#two">two</a></li>
                      <li class="divider"></li>
                      <li><a href="#three">three</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
            <h4 id="fat">@fat</h4>
            <p>
            Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
            </p>
            <h4 id="mdo">@mdo</h4>
            <p>
            Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.
            </p>
            <h4 id="one">one</h4>
            <p>
            Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.
            </p>
            <h4 id="two">two</h4>
            <p>
            In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.
            </p>
            <h4 id="three">three</h4>
            <p>
            Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
            </p>
            <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
            </p>
          </div>
          <hr>
          <h2>Using bootstrap-scrollspy.js</h2>
          <p>Call the scrollspy via javascript:</p>
          <pre class="prettyprint linenums">$('#navbar').scrollspy()</pre>
          <h3>Markup</h3>
          <p>To easily add scrollspy behavior to your topbar navigation, just add <code>data-spy="scroll"</code> to the element you want to spy on (most typically this would be the body).</p>
          <pre class="prettyprint linenums">&lt;body data-spy="scroll" &gt;...&lt;/body&gt;</pre>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Navbar links must have resolvable id targets. For example, a <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> must correspond to something in the dom like <code>&lt;div id="home"&gt;&lt;/div&gt;</code>.
          </div>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>number</td>
               <td>10</td>
               <td>Pixels to offset from top when calculating position of scroll.</td>
             </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>



    <!-- Tabs
    ================================================== -->
    <section id="tabs">
      <div class="page-header">
        <h1>Togglable tabs <small>bootstrap-tab.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <p>This plugin adds quick, dynamic tab and pill functionality for transitioning through local content.</p>
          <a href="assets/js/bootstrap-tab.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example tabs</h2>
          <p>Click the tabs below to toggle between hidden panes, even via dropdown menus.</p>
          <ul id="tab" class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
              </ul>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div class="tab-pane fade" id="profile">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
            </div>
            <div class="tab-pane fade" id="dropdown1">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
            </div>
            <div class="tab-pane fade" id="dropdown2">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            </div>
          </div>
          <hr>
          <h2>Using bootstrap-tab.js</h2>
          <p>Enable tabbable tabs via javascript:</p>
          <pre class="prettyprint linenums">$('#myTab').tab('show')</pre>
          <h3>Markup</h3>
          <p>You can activate a tab or pill navigation without writing any javascript by simply specifying <code>data-toggle="tab"</code> or <code>data-toggle="pill"</code> on an element.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li&gt;&lt;a href="#home" data-toggle="tab"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile" data-toggle="tab"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages" data-toggle="tab"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings" data-toggle="tab"&gt;Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
          <h3>Methods</h3>
          <h4>$().tab</h4>
          <p>
            Activates a tab element and content container. Tab should have either a `data-target` or an `href` targeting a container node in the dom.
          </p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="active"&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings"&gt;Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content"&gt;
  &lt;div class="tab-pane active" id="home"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="profile"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="messages"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="settings"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
  $(function () {
    $('.tabs a:last').tab('show')
  })
&lt;/script&gt;</pre>
          <h3>Events</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td>This event fires on tab show, but before the new tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
            </tr>
            <tr>
               <td>shown</td>
               <td>This event fires on tab show after a tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
             </tr>
            </tbody>
          </table>

          <pre class="prettyprint linenums">
$('a[data-toggle="tab"]').on('shown', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
})</pre>
       </div>
      </div>
    </section>


    <!-- Tooltips
    ================================================== -->
    <section id="tooltips">
      <div class="page-header">
        <h1>Tooltips <small>bootstrap-tooltip.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About Tooltips</h3>
          <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use css3 for animations, and data-attributes for local title storage.</p>
          <a href="assets/js/bootstrap-tooltip.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example use of Tooltips</h2>
          <p>Hover over the links below to see tooltips:</p>
          <div class="tooltip-demo well">
            <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="first tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A <a href="#" rel="tooltip" title="Another one here too">really ironic</a> artisan whatever keytar, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
            </p>
          </div>
          <hr>
          <h2>Using bootstrap-tooltip.js</h2>
          <p>Trigger the tooltip via javascript:</p>
          <pre class="prettyprint linenums">$('#example').tooltip(options)</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animation</td>
               <td>boolean</td>
               <td>true</td>
               <td>apply a css fade transition to the tooltip</td>
             </tr>
             <tr>
               <td>placement</td>
               <td>string|function</td>
               <td>'top'</td>
               <td>how to position the tooltip - top | bottom | left | right</td>
             </tr>
             <tr>
               <td>selector</td>
               <td>string</td>
               <td>false</td>
               <td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
             </tr>
             <tr>
               <td>title</td>
               <td>string | function</td>
               <td>''</td>
               <td>default title value if `title` tag isn't present</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td>string</td>
               <td>'hover'</td>
               <td>how tooltip is triggered - hover | focus | manual</td>
             </tr>
             <tr>
               <td>delay</td>
               <td>number | object</td>
               <td>0</td>
               <td>
                <p>delay showing and hiding the tooltip (ms)</p>
                <p>If a number is supplied, delay is applied to both hide/show</p>
                <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Options for individual tooltips can alternatively be specified through the use of data attributes.
          </div>
          <h3>Markup</h3>
          <p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>
<pre class="prettyprint linenums">
&lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;
</pre>
          <h3>Methods</h3>
          <h4>$().tooltip(options)</h4>
          <p>Attaches a tooltip handler to an element collection.</p>
          <h4>.tooltip('show')</h4>
          <p>Reveals an elements tooltip.</p>
          <pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
          <h4>.tooltip('hide')</h4>
          <p>Hides an elements tooltip.</p>
          <pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
          <h4>.tooltip('toggle')</h4>
          <p>Toggles an elements tooltip.</p>
          <pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
        </div>
      </div>
    </section>



    <!-- Popovers
    ================================================== -->
    <section id="popovers">
      <div class="page-header">
        <h1>Popovers <small>bootstrap-popover.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About popovers</h3>
          <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
          <p class="muted"><strong>*</strong> Requires <a href="#tooltips">Tooltip</a> to be included</p>
          <a href="assets/js/bootstrap-popover.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example hover popover</h2>
          <p>Hover over the button to trigger the popover.</p>
          <div class="well">
            <a href="#" class="btn btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">hover for popover</a>
          </div>
          <hr>
          <h2>Using bootstrap-popover.js</h2>
          <p>Enable popovers via javascript:</p>
          <pre class="prettyprint linenums">$('#example').popover(options)</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animation</td>
               <td>boolean</td>
               <td>true</td>
               <td>apply a css fade transition to the tooltip</td>
             </tr>
             <tr>
               <td>placement</td>
               <td>string|function</td>
               <td>'right'</td>
               <td>how to position the popover - top | bottom | left | right</td>
             </tr>
             <tr>
               <td>selector</td>
               <td>string</td>
               <td>false</td>
               <td>if a selector is provided, tooltip objects will be delegated to the specified targets</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td>string</td>
               <td>'hover'</td>
               <td>how tooltip is triggered - hover | focus | manual</td>
             </tr>
             <tr>
               <td>title</td>
               <td>string | function</td>
               <td>''</td>
               <td>default title value if `title` attribute isn't present</td>
             </tr>
             <tr>
               <td>content</td>
               <td>string | function</td>
               <td>''</td>
               <td>default content value if `data-content` attribute isn't present</td>
             </tr>
             <tr>
               <td>delay</td>
               <td>number | object</td>
               <td>0</td>
               <td>
                <p>delay showing and hiding the popover (ms)</p>
                <p>If a number is supplied, delay is applied to both hide/show</p>
                <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Options for individual popovers can alternatively be specified through the use of data attributes.
          </div>
          <h3>Markup</h3>
          <p>
          For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a the selector option.
          </p>
          <h3>Methods</h3>
          <h4>$().popover(options)</h4>
          <p>Initializes popovers for an element collection.</p>
          <h4>.popover('show')</h4>
          <p>Reveals an elements popover.</p>
          <pre class="prettyprint linenums">$('#element').popover('show')</pre>
          <h4>.popover('hide')</h4>
          <p>Hides an elements popover.</p>
          <pre class="prettyprint linenums">$('#element').popover('hide')</pre>
          <h4>.popover('toggle')</h4>
          <p>Toggles an elements popover.</p>
          <pre class="prettyprint linenums">$('#element').popover('toggle')</pre>
        </div>
      </div>
    </section>



    <!-- Alert
    ================================================== -->
    <section id="alerts">
      <div class="page-header">
        <h1>Alert messages <small>bootstrap-alert.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About alerts</h3>
          <p>The alert plugin is a tiny class for adding close functionality to alerts.</p>
          <a href="assets/js/bootstrap-alert.js" target="_blank" class="btn">Download</a>
        </div>
        <div class="span9 columns">
          <h2>Example alerts</h2>
          <p>The alerts plugin works on regular alert messages, and block messages.</p>
          <div class="alert fade in">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-block alert-error fade in">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">Oh snap! You got an error!</h4>
            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>
              <a class="btn btn-danger" href="#">Take this action</a> <a class="btn" href="#">Or do this</a>
            </p>
          </div>
          <hr>
          <h2>Using bootstrap-alerts.js</h2>
          <p>Enable dismissal of an alert via javascript:</p>
          <pre class="prettyprint linenums">$(".alert").alert()</pre>
          <h3>Markup</h3>
          <p>Just add <code>data-dismiss="alert"</code> to your close button to automatically give an alert close functionality.</p>
          <pre class="prettyprint linenums">&lt;a class="close" data-dismiss="alert" href="#"&gt;&amp;times;&lt;/a&gt;</pre>
          <h3>Methods</h3>
          <h4>$().alert()</h4>
          <p>Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the <code>.fade</code> and <code>.in</code> class already applied to them.</p>
          <h4>.alert('close')</h4>
          <p>Closes an alert.</p>
          <pre class="prettyprint linenums">$(".alert").alert('close')</pre>
          <h3>Events</h3>
          <p>Bootstrap's alert class exposes a few events for hooking into alert functionality.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>close</td>
               <td>This event fires immediately when the <code>close</code> instance method is called.</td>
             </tr>
             <tr>
               <td>closed</td>
               <td>This event is fired when the alert has been closed (will wait for css transitions to complete).</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$('#my-alert').bind('closed', function () {
  // do something…
})</pre>
        </div>
      </div>
    </section>



    <!-- Buttons
    ================================================== -->
    <section id="buttons">
      <div class="page-header">
        <h1>Buttons <small>bootstrap-button.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
          <a href="assets/js/bootstrap-button.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example uses</h2>
          <p>Use the buttons plugin for states and toggles.</p>
          <table class="table table-bordered table-striped">
            <tbody>
             <tr>
               <td>Stateful</td>
               <td>
                  <button id="fat-btn" data-loading-text="loading..." class="btn btn-primary">
                    Loading State
                  </button>
                </td>
             </tr>
             <tr>
               <td>Single toggle</td>
               <td>
                  <button class="btn btn-primary" data-toggle="button">Single Toggle</button>
                </td>
             </tr>
             <tr>
               <td>Checkbox</td>
               <td>
                  <div class="btn-group" data-toggle="buttons-checkbox">
                    <button class="btn btn-primary">Left</button>
                    <button class="btn btn-primary">Middle</button>
                    <button class="btn btn-primary">Right</button>
                  </div>
               </td>
             </tr>
             <tr>
               <td>Radio</td>
               <td>
                  <div class="btn-group" data-toggle="buttons-radio">
                    <button class="btn btn-primary">Left</button>
                    <button class="btn btn-primary">Middle</button>
                    <button class="btn btn-primary">Right</button>
                  </div>
               </td>
             </tr>
            </tbody>
          </table>
          <hr>
          <h2>Using bootstrap-button.js</h2>
          <p>Enable buttons via javascript:</p>
          <pre class="prettyprint linenums">$('.tabs').button()</pre>
            <h3>Markup</h3>
          <p>Data attributes are integral to the button plugin. Check out the example code below for the various markup types.</p>
<pre class="prettyprint linenums">
&lt;!-- Add data-toggle="button" to activate toggling on a single button --&gt;
&lt;button class="btn" data-toggle="button"&gt;Single Toggle&lt;/button&gt;

&lt;!-- Add data-toggle="buttons-checkbox" for checkbox style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-checkbox"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Add data-toggle="buttons-radio" for radio style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-radio"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
          <h3>Methods</h3>
          <h4>$().button('toggle')</h4>
          <p>Toggles push state. Gives btn the look that it hass been activated.</p>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            You can enable auto toggling of a button by using the <code>data-toggle</code> attribute.
          </div>
          <pre class="prettyprint linenums">&lt;button class="btn" data-toggle="button" &gt;…&lt;/button&gt;</pre>
          <h4>$().button('loading')</h4>
          <p>Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute <code>data-loading-text</code>.
          </p>
          <pre class="prettyprint linenums">&lt;button class="btn" data-loading-text="loading stuff..." &gt;...&lt;/button&gt;</pre>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            <a href="https://github.com/twitter/bootstrap/issues/793">Firefox persists the disabled state across page loads</a>. A workaround for this is to use <code>autocomplete="off"</code>.
          </div>
          <h4>$().button('reset')</h4>
          <p>Resets button state - swaps text to original text.</p>
          <h4>$().button(string)</h4>
          <p>Resets button state - swaps text to any data defined text state.</p>
<pre class="prettyprint linenums">&lt;button class="btn" data-complete-text="finished!" &gt;...&lt;/button&gt;
&lt;script&gt;
  $('.btn').button('complete')
&lt;/script&gt;</pre>
        </div>
      </div>
    </section>



    <!-- Collapse
    ================================================== -->
    <section id="collapse">
      <div class="page-header">
        <h1>Collapse <small>bootstrap-collapse.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
          <a href="assets/js/bootstrap-collapse.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example accordion</h2>
          <p>Using the collapse plugin, we built a simple accordion style widget:</p>

          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  Collapsible Group Item #1
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  Collapsible Group Item #2
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                  Collapsible Group Item #3
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>


          <hr>
          <h2>Using bootstrap-collapse.js</h2>
          <p>Enable via javascript:</p>
          <pre class="prettyprint linenums">$(".collapse").collapse()</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>parent</td>
               <td>selector</td>
               <td>false</td>
               <td>If selector then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior)</td>
             </tr>
             <tr>
               <td>toggle</td>
               <td>boolean</td>
               <td>true</td>
               <td>Toggles the collapsible element on invocation</td>
             </tr>
            </tbody>
          </table>
          <h3>Markup</h3>
          <p>Just add <code>data-toggle="collapse"</code> and a <code>data-target</code> to element to automatically assign control of a collapsible element. The <code>data-target</code> attribute accepts a css selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you'd like it to default open, add the additional class <code>in</code>.</p>
          <pre class="prettyprint linenums">
&lt;button class="btn btn-danger" data-toggle="collapse" data-target="#demo"&gt;
  simple collapsible
&lt;/button&gt;

&lt;div id="demo" class="collapse in"&gt; … &lt;/div&gt;</pre>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            To add accordion-like group management to a collapsible control, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.
          </div>
          <h3>Methods</h3>
          <h4>.collapse(options)</h4>
          <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.
<pre class="prettyprint linenums">
$('#myCollapsible').collapse({
  toggle: false
})</pre>
          <h4>.collapse('toggle')</h4>
          <p>Toggles a collapsible element to shown or hidden.</p>
          <h4>.collapse('show')</h4>
          <p>Shows a collapsible element.</p>
          <h4>.collapse('hide')</h4>
          <p>Hides a collapsible element.</p>
          <h3>Events</h3>
          <p>
            Bootstrap's collapse class exposes a few events for hooking into collapse functionality.
          </p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td>This event fires immediately when the <code>show</code> instance method is called.</td>
             </tr>
             <tr>
               <td>shown</td>
               <td>This event is fired when a collapse element has been made visible to the user (will wait for css transitions to complete).</td>
             </tr>
             <tr>
               <td>hide</td>
               <td>
                This event is fired immediately when the <code>hide</code> method has been called.
               </td>
             </tr>
             <tr>
               <td>hidden</td>
               <td>This event is fired when a collapse element has been hidden from the user (will wait for css transitions to complete).</td>
             </tr>
            </tbody>
          </table>

<pre class="prettyprint linenums">
$('#myCollapsible').on('hidden', function () {
  // do something…
})</pre>
        </div>
      </div>
    </section>



     <!-- Carousel
    ================================================== -->
    <section id="carousel">
      <div class="page-header">
        <h1>Carousel <small>bootstrap-carousel.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>A generic plugin for cycling through elements. A merry-go-round.</p>
          <a href="<?php get_template_directory_uri();?>/docs/assets/js/bootstrap-carousel.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example carousel</h2>
          <p>Watch the slideshow below.</p>
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <img src="<?php get_template_directory_uri()?>/docs/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                <div class="carousel-caption">
                  <h4>First Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
              <div class="item">
                <img src="<?php get_template_directory_uri()?>/docs/assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
              <div class="item">
                <img src="<?php get_template_directory_uri()?>/docs/assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            When implementing this carousel, remove the images we have provided and replace them with your own.
          </div>
          <hr>
          <h2>Using bootstrap-carousel.js</h2>
          <p>Call via javascript:</p>
          <pre class="prettyprint linenums">$('.carousel').carousel()</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>interval</td>
               <td>number</td>
               <td>5000</td>
               <td>The amount of time to delay between automatically cycling an item.</td>
             </tr>
            </tbody>
          </table>
          <h3>Markup</h3>
          <p>Data attributes are integral to the carousel plugin. Check out the example code below for the various markup types.</p>
<pre class="prettyprint linenums">
&lt;div id="myCarousel" class="carousel"&gt;
  &lt;!-- Carousel items --&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="active item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Carousel nav --&gt;
  &lt;a class="carousel-control left" href="#myCarousel" data-slide="prev"&gt;&amp;lsaquo;&lt;/a&gt;
  &lt;a class="carousel-control right" href="#myCarousel" data-slide="next"&gt;&amp;rsaquo;&lt;/a&gt;
&lt;/div&gt;
</pre>
          <h3>Methods</h3>
          <h4>.carousel(options)</h4>
          <p>Initializes the carousel with an optional options <code>object</code> and starts cycling through items.</p>
<pre class="prettyprint linenums">
$('.myCarousel').carousel({
  interval: 2000
})
</pre>
          <h4>.carousel('cycle')</h4>
          <p>Cycles through the carousel items from left to right.</p>
          <h4>.carousel('pause')</h4>
          <p>Stops the carousel from cycling through items.</p>
          <h4>.carousel(number)</h4>
          <p>Cycles the carousel to a particular frame (0 based, similar to an array).</p>
          <h4>.carousel('prev')</h4>
          <p>Cycles to the previous item.</p>
          <h4>.carousel('next')</h4>
          <p>Cycles to the next item.</p>
          <h3>Events</h3>
          <p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>slide</td>
               <td>This event fires immediately when the <code>slide</code> instance method is invoked.</td>
             </tr>
             <tr>
               <td>slid</td>
               <td>This event is fired when the carousel has completed its slide transition.</td>
             </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>



    <!-- Typeahead
    ================================================== -->
    <section id="typeahead">
      <div class="page-header">
        <h1>Typeahead <small>bootstrap-typeahead.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.</p>
          <a href="assets/js/bootstrap-typeahead.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
          <h2>Example</h2>
          <p>Start typing in the field below to show the typeahead results.</p>
          <div class="well">
            <input type="text" class="span3" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
          </div>
          <hr>
          <h2>Using bootstrap-typeahead.js</h2>
          <p>Call the typeahead via javascript:</p>
          <pre class="prettyprint linenums">$('.typeahead').typeahead()</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 100px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
              <tr>
               <td>source</td>
               <td>array</td>
               <td>[ ]</td>
               <td>The data source to query against.</td>
             </tr>
             <tr>
               <td>items</td>
               <td>number</td>
               <td>8</td>
               <td>The max number of items to display in the dropdown.</td>
             </tr>
             <tr>
               <td>matcher</td>
               <td>function</td>
               <td>case insensitive</td>
               <td>The method used to determine if a query matches an item. Accepts a single argument, the <code>item</code> against which to test the query. Access the current query with <code>this.query</code>. Return a boolean <code>true</code> if query is a match.</td>
             </tr>
             <tr>
               <td>sorter</td>
               <td>function</td>
               <td>exact match,<br> case sensitive,<br> case insensitive</td>
               <td>Method used to sort autocomplete results. Accepts a single argument <code>items</code> and has the scope of the typeahead instance. Reference the current query with <code>this.query</code>.</td>
             </tr>
             <tr>
               <td>highlighter</td>
               <td>function</td>
               <td>highlights all default matches</td>
               <td>Method used to highlight autocomplete results. Accepts a single argument <code>item</code> and has the scope of the typeahead instance. Should return html.</td>
             </tr>
            </tbody>
          </table>

          <h3>Markup</h3>
          <p>Add data attributes to register an element with typeahead functionality.</p>
<pre class="prettyprint linenums">
&lt;input type="text" data-provide="typeahead"&gt;
</pre>
          <h3>Methods</h3>
          <h4>.typeahead(options)</h4>
          <p>Initializes an input with a typeahead.</p>
        </div>
      </div>
    </section>

<?php endwhile; ?>
<?php get_footer(); ?>