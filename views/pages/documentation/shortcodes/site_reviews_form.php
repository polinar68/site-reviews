<div class="glsr-card postbox">
    <h3 class="glsr-card-heading">
        <button type="button" class="glsr-accordion-trigger" aria-expanded="false" aria-controls="shortcode-site_reviews_form">
            <span class="title">Display the submission form</span>
            <span class="badge code">[site_reviews_form]</span>
            <span class="icon"></span>
        </button>
    </h3>
    <div id="shortcode-site_reviews_form" class="inside">
        <h3>This shortcode displays the review submission form.</h3>
        <div class="notice inline notice-info notice-alt">
            <p>Each example below demonstrates a different shortcode option. If you need to use multiple options, simply combine the options together (separated with a space) in the same shortcode.</p>
        </div>

        <p class="glsr-heading">assigned_posts</p>
        <p>Include the "assigned_posts" option to automatically assign submitted reviews to those assigned posts, pages, or other public post types. Accepted values are a numerical <a href="https://pagely.com/blog/find-post-id-wordpress/">WordPress Post ID</a>, <code>post_id</code> which automatically uses the ID of the current page, or <code>parent_id</code> which automatically uses the ID of the parent page. Separate multiple values with a comma.</p>
        <p>The default assigned_posts value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form assigned_posts="post_id"]</code></pre>

        <p class="glsr-heading">assigned_terms</p>
        <p>Include the "assigned_terms" option to automatically assign submitted reviews to those assigned categories. Accepted values are either a category ID or slug. Separate multiple values with a comma.</p>
        <p>The default assigned_terms value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form assigned_terms="13,14"]</code></pre>

        <p class="glsr-heading">assigned_users</p>
        <p>Include the "assigned_users" option to automatically assign submitted reviews to those assigned users. Accepted values are either a user ID or username. Separate multiple values with a comma.</p>
        <p>The default assigned_users value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form assigned_users="1,2"]</code></pre>

        <p class="glsr-heading">class</p>
        <p>Include the "class" option to add custom CSS classes to the shortcode form.</p>
        <p>The default class value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form class="my-reviews-form full-width"]</code></pre>

        <p class="glsr-heading">description</p>
        <p>Include the "description" option to display a custom shortcode description.</p>
        <p>The default description value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form description="Required fields are marked with an asterisk (*)"]</code></pre>

        <p class="glsr-heading">hide</p>
        <p>Include the "hide" option to exclude certain fields in the form. If all fields are hidden, the shortcode will not be displayed.</p>
        <p>The default hide value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form hide="content,email,name,rating,terms,title"]</code></pre>

        <p class="glsr-heading">id</p>
        <p>This shortcode should only be used on a page once. However, if you need to include more than one on a page, use the "id" option to add a custom HTML id attribute to the shortcode to make it a unique shortcode form.</p>
        <p>The default id value is: <code>""</code></p>
        <pre><code class="language-html">[site_reviews_form id="type-some-random-text-here"]</code></pre>
    </div>
</div>
