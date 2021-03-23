<!DOCTYPE html>
<html lang="en">

<head>
	@@include('./layouts/head.html')
	<!-- prism css -->
	<link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
	@@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
			<div class="col-md-8">
				<h3>Grid System</h3>
				<p class="lead">Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p>
				<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-bc-package.html" target="_blank" class="badge bg-light-primary">Documentation</a></p>
			</div>
		</div>
		<div class="row">
			<!-- [ grid ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<p>Bootstrap&rsquo;s grid system uses a series of containers, rows, and columns to layout and align content. It&rsquo;s built with <a
								href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexbox</a> and is fully responsive. Below is an example and an in-depth explanation for how the grid system
							comes together.
						</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
								</div>
							</div>
							<pre class=""><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>The above example creates three equal-width columns across all devices and viewports using our predefined grid classes. Those columns are centered in the page with the parent <code>.container</code>.</p>
						<h2 id="how-it-works">How it works</h2>
						<p>Breaking it down, here&rsquo;s how the grid system comes together:</p>
						<ul>
							<li>
								<p><strong>Our grid supports <a>six responsive breakpoints.</strong> Breakpoints are based on <code>min-width</code> media queries, meaning they affect that breakpoint and all those above it (e.g.,
									<code>.col-sm-4</code> applies to <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>). This means you can control container and column sizing and behavior by each breakpoint.
								</p>
							</li>
							<li>
								<p><strong>Containers center and horizontally pad your content.</strong> Use <code>.container</code> for a responsive pixel width, <code>.container-fluid</code> for <code>width: 100%</code> across all viewports and
									devices, or a responsive container (e.g., <code>.container-md</code>) fir combination of fluid and pixel widths.</p>
							</li>
							<li>
								<p><strong>Rows are wrappers for columns.</strong> Each column has horizontal <code>padding</code> (called a gutter) for controlling the space between them. This <code>padding</code> is then counteracted on the rows
									with negative margins to ensure the content in your columns is visually aligned down the left side. Rows also support modifier classes to <a href="#row-columns">uniformly apply column sizing</a> and gutter classes
									to change the spacing of your content.</p>
							</li>
							<li>
								<p><strong>Columns are incredibly flexible.</strong> There are 12 template columns available per row, allowing you to create different combinations of elements that span any number of columns. Column classes indicate
									the number of template columns to span (e.g., <code>col-4</code> spans four). <code>width</code>s are set in percentages so you always have the same relative sizing.</p>
							</li>
							<li>
								<p><strong>Gutters are also responsive and customizable.</strong> Gutter classes are available across all breakpoints, with all the same sizes as our margin and padding spacing. Change horizontal gutters with
									<code>.gx-*</code> classes, verical gutters with <code>.gy-*</code>, or all gutters with <code>.g-*</code> classes. <code>.g-0</code> is also availble to remove gutters.</p>
							</li>
							<li>
								<p><strong>Sass variables, maps, and mixins power the grid.</strong> If you don&rsquo;t want to use the predefined grid classes in Bootstrap, you can use our <a href="#sass">grid&rsquo;s source Sass</a> to create your
									own with more semantic markup. We also include some CSS custom properties to consume these Sass variables for even greater flexibility for you.</p>
							</li>
						</ul>
						<p>Be aware of the limitations and <a href="https://github.com/philipwalton/flexbugs">bugs around flexbox</a>, like the <a href="https://github.com/philipwalton/flexbugs#flexbug-9">inability to use some HTML elements as flex
								containers</a>.</p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="grid-options">Grid options</h2>
						<p>Bootstrap&rsquo;s grid system can adapt across all six default breakpoints, and any breakpoints you customize. The six default grid tiers are as follow:</p>
						<ul>
							<li>Extra small (xs)</li>
							<li>Small (sm)</li>
							<li>Medium (md)</li>
							<li>Large (lg)</li>
							<li>Extra large (xl)</li>
							<li>Extra extra large (xxl)</li>
						</ul>
						<p>As noted above, each of these breakpoints have their own container, unique class prefix, and modifiers. Here&rsquo;s how the grid changes across thesse breakpoints:</p>
						<table class="table mb-4">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">
										xs<br>
										<span class="font-weight-normal">&lt;576px</span>
									</th>
									<th scope="col">
										sm<br>
										<span class="font-weight-normal">&ge;576px</span>
									</th>
									<th scope="col">
										md<br>
										<span class="font-weight-normal">&ge;768px</span>
									</th>
									<th scope="col">
										lg<br>
										<span class="font-weight-normal">&ge;992px</span>
									</th>
									<th scope="col">
										xl<br>
										<span class="font-weight-normal">&ge;1200px</span>
									</th>
									<th scope="col">
										xxl<br>
										<span class="font-weight-normal">&ge;1400px</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="text-nowrap" scope="row">Container <code class="font-weight-normal">max-width</code></th>
									<td>None (auto)</td>
									<td>540px</td>
									<td>720px</td>
									<td>960px</td>
									<td>1140px</td>
									<td>1320px</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Class prefix</th>
									<td><code>.col-</code></td>
									<td><code>.col-sm-</code></td>
									<td><code>.col-md-</code></td>
									<td><code>.col-lg-</code></td>
									<td><code>.col-xl-</code></td>
									<td><code>.col-xxl-</code></td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row"># of columns</th>
									<td colspan="6">12</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Gutter width</th>
									<td colspan="6">1.5rem (.75rem on left and right)</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Custom gutters</th>
									<td colspan="6"><a href="/docs/5.0/layout/gutters/">Yes</a></td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Nestable</th>
									<td colspan="6"><a href="#nesting">Yes</a></td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Column ordering</th>
									<td colspan="6"><a href="/docs/5.0/layout/columns/#reordering">Yes</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="auto-layout-columns">Auto-layout columns</h2>
						<p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like <code>.col-sm-6</code>.</p>
						<h3 id="equal-width">Equal-width</h3>
						<p>For example, here are two grid layouts that apply to every device and viewport, from <code>xs</code> to <code>xxl</code>. Add any number of unit-less classes for each breakpoint you need and every column will be the same
							width.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col">
										1 of 2
									</div>
									<div class="col">
										2 of 2
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col">
										2 of 3
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<pre><code class="language-html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 2
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      2 of 2
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      2 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="setting-one-column-width">Setting one column width</h3>
						<p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline
							widths. Note
							that the other columns will resize no matter the width of the center column.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-6">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-5">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      2 of 3 (wider)
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-5&#34;</span><span class="p">&gt;</span>
      2 of 3 (wider)
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="variable-width-content">Variable width content</h3>
						<p>Use <code>col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row justify-content-md-center">
									<div class="col col-lg-2">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-md-center&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-auto&#34;</span><span class="p">&gt;</span>
      Variable width content
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-auto&#34;</span><span class="p">&gt;</span>
      Variable width content
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="responsive-classes">Responsive classes</h2>
						<p>Bootstrap&rsquo;s grid includes six tiers of predefined classes for building complex responsive layouts. Customize the size of your columns on extra small, small, medium, large, or extra large devices however you see fit.
						</p>
						<h3 id="all-breakpoints">All breakpoints</h3>
						<p>For grids that are the same from the smallest of devices to the largest, use the <code>.col</code> and <code>.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to
							stick to
							<code>.col</code>.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col">col</div>
									<div class="col">col</div>
									<div class="col">col</div>
									<div class="col">col</div>
								</div>
								<div class="row">
									<div class="col-8">col-8</div>
									<div class="col-4">col-4</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-8&#34;</span><span class="p">&gt;</span>col-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>col-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="stacked-to-horizontal">Stacked to horizontal</h3>
						<p>Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code>sm</code>).</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-sm-8">col-sm-8</div>
									<div class="col-sm-4">col-sm-4</div>
								</div>
								<div class="row">
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-8&#34;</span><span class="p">&gt;</span>col-sm-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-4&#34;</span><span class="p">&gt;</span>col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="mix-and-match">Mix and match</h3>
						<p>Don&rsquo;t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</p>
						<div class="bd-example-row">
							<div class="container">
								<!-- Stack the columns on mobile by making one full-width and the other half-width -->
								<div class="row">
									<div class="col-md-8">.col-md-8</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
								<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
								<div class="row">
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
								<!-- Columns are always 50% wide, on mobile and desktop -->
								<div class="row">
									<div class="col-6">.col-6</div>
									<div class="col-6">.col-6</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-8&#34;</span><span class="p">&gt;</span>.col-md-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>.col-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>.col-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="row-columns">Row columns</h3>
						<p>Use the responsive <code>.row-cols-*</code> classes to quickly set the number of columns that best render your content and layout. Whereas normal <code>.col-*</code> classes apply to the individual columns (e.g.,
							<code>.col-md-4</code>), the row columns classes are set on the parent <code>.row</code> as a shortcut. With <code>.row-cols-auto</code> you can give the columns their natural width.</p>
						<p>Use these row columns classes to quickly create basic grid layouts or to control your card layouts.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-2">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-2&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-3">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-auto">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-4">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-4">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col-6">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row">
							<div class="container">
								<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
									<div class="col">Column</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-1 row-cols-sm-2 row-cols-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>You can also use the accompanying Sass mixin, <code>row-cols()</code>:</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Three columns to start
</span><span class="c1"></span>  <span class="k">@include</span><span class="nd"> row-cols</span><span class="p">(</span><span class="mi">3</span><span class="p">);</span>

  <span class="c1">// Five columns from medium breakpoint up
</span><span class="c1"></span>  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> row-cols</span><span class="p">(</span><span class="mi">5</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre>
						</div>
						<h2 id="nesting">Nesting</h2>
						<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to
							12
							or fewer
							(it is not required that you use all 12 available columns).</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										Level 1: .col-sm-3
									</div>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-8 col-sm-6">
												Level 2: .col-8 .col-sm-6
											</div>
											<div class="col-4 col-sm-6">
												Level 2: .col-4 .col-sm-6
											</div>
										</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>
      Level 1: .col-sm-3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-8 col-sm-6&#34;</span><span class="p">&gt;</span>
          Level 2: .col-8 .col-sm-6
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-sm-6&#34;</span><span class="p">&gt;</span>
          Level 2: .col-4 .col-sm-6
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="sass">Sass</h2>
						<p>When using Bootstrap&rsquo;s source Sass files, you have the option of using Sass variables and mixins to create custom, semantic, and responsive page layouts. Our predefined grid classes use these same variables and mixins
							to
							provide
							a whole suite of ready-to-use classes for fast responsive layouts.</p>
						<h3 id="variables">Variables</h3>
						<p>Variables and maps determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the
							custom mixins
							listed below.</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="o">:</span>      <span class="mi">12</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="o">:</span> <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span></code></pre>
						</div>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="n">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="n">sm</span><span class="o">:</span> <span class="mi">576</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="mi">992</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">xl</span><span class="o">:</span> <span class="mi">1200</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">xxl</span><span class="o">:</span> <span class="mi">1400</span><span class="kt">px</span>
<span class="p">);</span></code></pre>
						</div>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$container-max-widths</span><span class="o">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="mi">540</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="mi">720</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="mi">960</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">xl</span><span class="o">:</span> <span class="mi">1140</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">xxl</span><span class="o">:</span> <span class="mi">1320</span><span class="kt">px</span>
<span class="p">);</span></code></pre>
						</div>
						<h3 id="mixins">Mixins</h3>
						<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-row</span><span class="p">();</span>

<span class="c1">// Make the element grid-ready (applying everything but the width)
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>
<span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span>

<span class="c1">// Get fancy by offsetting, or changing the sort order
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-col-offset</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span></code></pre>
						</div>
						<h3 id="example-usage">Example usage</h3>
						<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here&rsquo;s an example of using the default settings to create a two-column layout with a gap between.</p>
						<div class="highlight">
							<pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.example-container</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-container</span><span class="p">();</span>
  <span class="c1">// Make sure to define this width after the mixin to override
</span><span class="c1"></span>  <span class="c1">// `width: 100%` generated by `make-container()`
</span><span class="c1"></span>  <span class="nt">width</span><span class="nd">:</span> <span class="nt">800px</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.example-row</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-row</span><span class="p">();</span>
<span class="p">}</span>

<span class="nc">.example-content-main</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">8</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nc">.example-content-secondary</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">4</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre>
						</div>
						<div class="bd-example">
							<div class="example-container">
								<div class="example-row">
									<div class="example-content-main">Main content</div>
									<div class="example-content-secondary">Secondary content</div>
								</div>
							</div>
						</div>
						<div class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-content-main&#34;</span><span class="p">&gt;</span>Main content<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-content-secondary&#34;</span><span class="p">&gt;</span>Secondary content<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="customizing-the-grid">Customizing the grid</h2>
						<p>Using our built-in grid Sass variables and maps, it&rsquo;s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths—then recompile.</p>
						<h3 id="columns-and-gutters">Columns and gutters</h3>
						<p>The number of grid columns can be modified via Sass variables. <code>$grid-columns</code> is used to generate the widths (in percent) of each individual column while <code>$grid-gutter-width</code> sets the width for the
							column
							gutters.</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="o">:</span> <span class="mi">12</span> <span class="nv">!default</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="o">:</span> <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span> <span class="nv">!default</span><span class="p">;</span></code></pre>
						</div>
						<h3 id="grid-tiers">Grid tiers</h3>
						<p>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you wanted just four grid tiers, you&rsquo;d update the <code>$grid-breakpoints</code> and <code>$container-max-widths</code> to
							something like
							this:</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="n">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="n">sm</span><span class="o">:</span> <span class="mi">480</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="mi">1024</span><span class="kt">px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="o">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="mi">420</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="mi">720</span><span class="kt">px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="mi">960</span><span class="kt">px</span>
<span class="p">);</span> </code></pre>
						</div>
						<p>When making any changes to the Sass variables or maps, you&rsquo;ll need to save your changes and recompile. Doing so will output a brand new set of predefined grid classes for column widths, offsets, and ordering.
							Responsive
							visibility utilities will also be updated to use the custom breakpoints. Make sure to set grid values in <code>px</code> (not <code>rem</code>, <code>em</code>, or <code>%</code>).</p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="how-they-work">How they work</h2>
						<ul>
							<li>
								<p><strong>Columns build on the grid&rsquo;s flexbox architecture.</strong> Flexbox means we have options for changing individual columns and <a href="/docs/5.0/layout/grid/#row-columns">modifying groups of columns at
										the row
										level</a>. You choose how columns grow, shrink, or otherwise change.</p>
							</li>
							<li>
								<p><strong>When building grid layouts, all content goes in columns.</strong> The hierarchy of Bootstrap&rsquo;s grid goes from <a href="/docs/5.0/layout/containers/">container</a> to row to column to your content. On
									rare
									ocassions, you may combine content and column, but be aware there can be unintended consequences.</p>
							</li>
							<li>
								<p><strong>Bootstrap includes predefined classes for creating fast, responsive layouts.</strong> With <a href="/docs/5.0/layout/breakpoints/">six breakpoints</a> and a dozen columns at each grid tier, we have dozens of
									classes
									already built for you to create your desired layouts. This can be disabled via Sass if you wish.</p>
							</li>
						</ul>
						<h2 id="alignment">Alignment</h2>
						<p>Use flexbox alignment utilities to vertically and horizontally align columns.</p>
						<h3 id="vertical-alignment">Vertical alignment</h3>
						<div class="bd-example-row bd-example-row-flex-cols">
							<div class="container">
								<div class="row align-items-start">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-end">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
							</div>
						</div>
						<div class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row align-items-start&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row align-items-center&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row align-items-end&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<div class="bd-example-row bd-example-row-flex-cols">
							<div class="container">
								<div class="row">
									<div class="col align-self-start">
										One of three columns
									</div>
									<div class="col align-self-center">
										One of three columns
									</div>
									<div class="col align-self-end">
										One of three columns
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col align-self-start&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col align-self-center&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col align-self-end&#34;</span><span class="p">&gt;</span>
      One of three columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="horizontal-alignment">Horizontal alignment</h3>
						<div class="bd-example-row">
							<div class="container">
								<div class="row justify-content-start">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-end">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-around">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-between">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-evenly">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-start&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-center&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-end&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-around&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-between&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-evenly&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>
      One of two columns
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3 id="column-wrapping">Column wrapping</h3>
						<p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-9">.col-9</div>
									<div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
									<div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-9&#34;</span><span class="p">&gt;</span>.col-9<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>.col-4<span class="p">&lt;</span><span class="nt">br</span><span class="p">&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>.col-6<span class="p">&lt;</span><span class="nt">br</span><span class="p">&gt;</span>Subsequent columns continue along the new line.<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="column-breaks">Column breaks</h3>
						<p>Breaking columns to a new line in flexbox requires a small hack: add an element with <code>width: 100%</code> wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple
							<code>.row</code>s, but not
							every implementation method can account for this.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<!-- Force next columns to break to new line -->
									<div class="w-100"></div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
								</div>
							</div>
						</div>
						<div class="highlight">
							<pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-3&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-3&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Force next columns to break to new line --&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;w-100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-3&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-3&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>You may also apply this break at specific breakpoints with our <a href="/docs/5.0/utilities/display/">responsive display utilities</a>.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<!-- Force next columns to break to new line at md breakpoint and up -->
									<div class="w-100 d-none d-md-block"></div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-4&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-4&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Force next columns to break to new line at md breakpoint and up --&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;w-100 d-none d-md-block&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-4&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-sm-4&#34;</span><span class="p">&gt;</span>.col-6 .col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="reordering">Reordering</h2>
						<h3 id="order-classes">Order classes</h3>
						<p>Use <code>.order-</code> classes for controlling the <strong>visual order</strong> of your content. These classes are responsive, so you can set the <code>order</code> by breakpoint (e.g., <code>.order-1.order-md-2</code>).
							Includes
							support for <code>1</code> through <code>5</code> across all six grid tiers.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col">
										First in DOM, no order applied
									</div>
									<div class="col order-5">
										Second in DOM, with a larger order
									</div>
									<div class="col order-1">
										Third in DOM, with an order of 1
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      First in DOM, no order applied
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col order-5&#34;</span><span class="p">&gt;</span>
      Second in DOM, with a larger order
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col order-1&#34;</span><span class="p">&gt;</span>
      Third in DOM, with an order of 1
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>There are also responsive <code>.order-first</code> and <code>.order-last</code> classes that change the <code>order</code> of an element by applying <code>order: -1</code> and <code>order: 6</code>, respectively. These
							classes can
							also be intermixed with the numbered <code>.order-*</code> classes as needed.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col order-last">
										First in DOM, ordered last
									</div>
									<div class="col">
										Second in DOM, unordered
									</div>
									<div class="col order-first">
										Third in DOM, ordered first
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col order-last&#34;</span><span class="p">&gt;</span>
      First in DOM, ordered last
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      Second in DOM, unordered
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col order-first&#34;</span><span class="p">&gt;</span>
      Third in DOM, ordered first
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h3 id="offsetting-columns">Offsetting columns</h3>
						<p>You can offset grid columns in two ways: our responsive <code>.offset-</code> grid classes and our <a href="/docs/5.0/utilities/spacing/">margin utilities</a>. Grid classes are sized to match columns while margins are more
							useful for
							quick layouts where the width of the offset is variable.</p>
						<h4 id="offset-classes">Offset classes</h4>
						<p>Move columns to the right using <code>.offset-md-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four
							columns.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-md-4">.col-md-4</div>
									<div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
								</div>
								<div class="row">
									<div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
									<div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>.col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4 offset-md-4&#34;</span><span class="p">&gt;</span>.col-md-4 .offset-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 offset-md-3&#34;</span><span class="p">&gt;</span>.col-md-3 .offset-md-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 offset-md-3&#34;</span><span class="p">&gt;</span>.col-md-3 .offset-md-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6 offset-md-3&#34;</span><span class="p">&gt;</span>.col-md-6 .offset-md-3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>In addition to column clearing at responsive breakpoints, you may need to reset offsets. See this in action in <a href="/docs/5.0/examples/grid/">the grid example</a>.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
									<div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
									<div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
								</div>
							</div>
						</div>
						<div class="highlight">
							<pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-5 col-md-6&#34;</span><span class="p">&gt;</span>.col-sm-5 .col-md-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-5 offset-sm-2 col-md-6 offset-md-0&#34;</span><span class="p">&gt;</span>.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-6 col-md-5 col-lg-6&#34;</span><span class="p">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0&#34;</span><span class="p">&gt;</span>.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h4 id="margin-utilities">Margin utilities</h4>
						<p>With the move to flexbox in v4, you can use margin utilities like <code>.me-auto</code> to force sibling columns away from one another.</p>
						<div class="bd-example-row">
							<div class="container">
								<div class="row">
									<div class="col-md-4">.col-md-4</div>
									<div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
								</div>
								<div class="row">
									<div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
									<div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
								</div>
								<div class="row">
									<div class="col-auto me-auto">.col-auto .me-auto</div>
									<div class="col-auto">.col-auto</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>.col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4 ms-auto&#34;</span><span class="p">&gt;</span>.col-md-4 .ms-auto<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 ms-md-auto&#34;</span><span class="p">&gt;</span>.col-md-3 .ms-md-auto<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 ms-md-auto&#34;</span><span class="p">&gt;</span>.col-md-3 .ms-md-auto<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto me-auto&#34;</span><span class="p">&gt;</span>.col-auto .me-auto<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>.col-auto<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h2 id="standalone-column-classes">Standalone column classes</h2>
						<p>The <code>.col-*</code> classes can also be used outside a <code>.row</code> to give an element a specific width. Whenever column classes are used as non direct children of a row, the paddings are omitted.</p>
						<div class="bd-example">
							<div class="col-3 bg-light p-3 border">
								.col-3: width of 25%
							</div>
							<div class="col-sm-9 bg-light p-3 border">
								.col-sm-9: width of 75% above sm breakpoint
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-3 bg-light p-3 border&#34;</span><span class="p">&gt;</span>
  .col-3: width of 25%
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9 bg-light p-3 border&#34;</span><span class="p">&gt;</span>
  .col-sm-9: width of 75% above sm breakpoint
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>The classes can be used together with utilities to create responsive floated images. Make sure to wrap the content in a <a href="/docs/5.0/helpers/clearfix/"><code>.clearfix</code></a> wrapper to clear the float if the text
							is shorter.
						</p>
						<div class="bd-example">
							<div class="clearfix">
								<svg class="bd-placeholder-img col-md-6 float-md-right mb-3 ms-md-3" width="100%" height="210" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Responsive floated image" preserveAspectRatio="xMidYMid slice"
									role="img" focusable="false">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#868e96" />
									<text x="50%" y="50%" fill="#dee2e6" dy=".3em" dx="-5rem">Responsive floated image</text>
								</svg>
								<p>
									Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris paddenstoel nibh, ut fermentum massa justo sit amet risus. Lorem
									ipsum dolor
									sit amet, consectetur adipiscing elit.
								</p>
								<p>
									Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Id nullam tellus relem amet
									commodo
									telemque olemit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
								</p>
								<p>
									Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lantaarnpaal quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum. Nullam quis risus eget
									urna salsa
									tequila vel eu leo. Donec id elit non mi porta gravida at eget metus.
								</p>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;clearfix&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6 float-md-right mb-3 ms-md-3&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>
    Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris paddenstoel nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  <span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>
    Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Id nullam tellus relem amet commodo telemque olemit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
  <span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>
    Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lantaarnpaal quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum. Nullam quis risus eget urna salsa tequila vel eu leo. Donec id elit non mi porta gravida at eget metus.
  <span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h2 id="content">Gutters</h2>
						<p class="bd-lead mb-0">Gutters are the padding between your columns, used to responsively space and align content in the Bootstrap grid system.</p>
					</div>
					<div class="card-body">
						<h2 id="how-they-work">How they work</h2>
						<ul>
							<li>
								<p><strong>Gutters are the gaps between column content, created by horizontal <code>padding</code>.</strong> We set <code>padding-right</code> and <code>padding-left</code> on each column, and use negative
									<code>margin</code> to
									offset that at the start and end of each row to align content.</p>
							</li>
							<li>
								<p><strong>Gutters start are <code>1.5rem</code> (<code>20px</code>) wide.</strong> This allows us to match our grid to the <a href="/docs/5.0/utilities/spacing/">padding and margin spacers</a> scale.</p>
							</li>
							<li>
								<p><strong>Gutters can be responsively adjusted.</strong> Use breakpoint-specific gutter classes to modify horizontal gutters, vertical gutters, and all gutters.</p>
							</li>
						</ul>
						<h2 id="horizontal-gutters">Horizontal gutters</h2>
						<p><code>.gx-*</code> classes can be used to control the horizontal gutter widths. The <code>.container</code> or <code>.container-fluid</code> parent may need to be adjusted if larger gutters are used too to avoid unwanted
							overflow,
							using a matching padding utility. For example, in the following example we&rsquo;ve increased the padding with <code>.px-4</code>:</p>
						<div class="bd-example">
							<div class="container px-4">
								<div class="row gx-5">
									<div class="col">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container px-4&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row gx-5&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
     <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<p>An alternative solution is to add a wrapper around the <code>.row</code> with the <code>.overflow-hidden</code> class:</p>
						<div class="bd-example">
							<div class="container overflow-hidden">
								<div class="row gx-5">
									<div class="col">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container overflow-hidden&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row gx-5&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
     <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="vertical-gutters">Vertical gutters</h2>
						<p><code>.gy-*</code> classes can be used to control the vertical gutter widths. Like the horizontal gutters, the vertical gutters can cause some overflow below the <code>.row</code> at the end of a page. If this occurs, you
							add a wrapper
							around <code>.row</code> with the <code>.overflow-hidden</code> class:</p>
						<div class="bd-example">
							<div class="container overflow-hidden">
								<div class="row gy-5">
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container overflow-hidden&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row gy-5&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="horizontal--vertical-gutters">Horizontal &amp; vertical gutters</h2>
						<p><code>.g-*</code> classes can be used to control the horizontal gutter widths, for the following example we use a smaller gutter width, so there won&rsquo;t be a need to add the <code>.overflow-hidden</code> wrapper class.
						</p>
						<div class="bd-example">
							<div class="container">
								<div class="row g-2">
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
									<div class="col-6">
										<div class="p-3 border bg-light">Custom column padding</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-2&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Custom column padding<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="row-columns-gutters">Row columns gutters</h2>
						<p>Gutter classes can also be added to <a href="/docs/5.0/layout/grid/#row-columns">row columns</a>. In the following example, we use responsive row columns and responsive gutter classes.</p>
						<div class="bd-example">
							<div class="container">
								<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
									<div class="col">
										<div class="p-3 border bg-light">Row column</div>
									</div>
								</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-2 row-cols-lg-5 g-2 g-lg-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-3 border bg-light&#34;</span><span class="p">&gt;</span>Row column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="no-gutters">No gutters</h2>
						<p>The gutters between columns in our predefined grid classes can be removed with <code>.g-0</code>. This removes the negative <code>margin</code>s from <code>.row</code> and the horizontal <code>padding</code> from all
							immediate children
							columns.</p>
						<p><strong>Need an edge-to-edge design?</strong> Drop the parent <code>.container</code> or <code>.container-fluid</code>.</p>
						<p>In practice, here&rsquo;s how it looks. Note you can continue to use this with all other predefined grid classes (including column widths, responsive tiers, reorders, and more).</p>
						<div class="bd-example bd-example-row">
							<div class="row g-0">
								<div class="col-sm-6 col-md-8">.col-sm-6 .col-md-8</div>
								<div class="col-6 col-md-4">.col-6 .col-md-4</div>
							</div>
							<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-0&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-6 col-md-8&#34;</span><span class="p">&gt;</span>.col-sm-6 .col-md-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
						</div>
						<h2 id="change-the-gutters">Change the gutters</h2>
						<p>Classes are built from the <code>$gutters</code> Sass map which is inherited from the <code>$spacers</code> Sass map.</p>
						<div class="highlight">
							<pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-gutter-width</span><span class="o">:</span> <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$gutters</span><span class="o">:</span> <span class="p">(</span>
  <span class="mi">0</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="mi">1</span><span class="o">:</span> <span class="nv">$spacer</span> <span class="o">*</span> <span class="mf">.25</span><span class="o">,</span>
  <span class="mi">2</span><span class="o">:</span> <span class="nv">$spacer</span> <span class="o">*</span> <span class="mf">.5</span><span class="o">,</span>
  <span class="mi">3</span><span class="o">:</span> <span class="nv">$spacer</span><span class="o">,</span>
  <span class="mi">4</span><span class="o">:</span> <span class="nv">$spacer</span> <span class="o">*</span> <span class="mi">1</span><span class="mf">.5</span><span class="o">,</span>
  <span class="mi">5</span><span class="o">:</span> <span class="nv">$spacer</span> <span class="o">*</span> <span class="mi">3</span><span class="o">,</span>
<span class="p">);</span>
																	</code></pre>
						</div>

					</div>
				</div>
			</div>
			<!-- [ grid ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- prism Js -->
<script src="assets/js/plugins/prism.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
