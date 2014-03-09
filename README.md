# BVCPS Wordpress

## Setup

There are a lot of ways to set up Wordpress.

* [WP-CLI](http://wp-cli.org)
* [Download](https://wordpress.org/download/)

Many web hosts also have 'one-click' installers, so check with the host
for setting this up.

The theme can be cloned from Github into the `wp-content\themes`
directory.

```shell
$ cd path/to/wordpress/wp-content/themes
$ git clone https://github.com/waynegraham/bvcps.org.git
```

### Required Plugins

This theme uses several plugins which can be downloaded through the
plugins interface in the Wordpress admin panel.

* Akismet
* Display Posts Shortcode
* Google Calendar Events
* Jetpack
* WP Bootstrap Carousel
* WP Super Cache

## Adding Content

There are two main types of content in this theme: **Pages** and **Posts**.
Pages are best for major informational content to display to users. A
**Post** is good for announcements that have a temporal dimension and
need only be highlighed for a short duration. Additionally, there is a
**Custom Post Type** named *Closings* that is meant to help make
displaying a warning when the school system is closed simple.

### Posts
Posts are the most commonly added items for this site. These can be
annoucements about meetings for the community, recognizing outstanding
academic or sports achievements, or other such information for the
community. Posts can be accessed in several different ways.

#### Carousel
The main landing page of the site includes a carousel of revolving
images, including a brief blurb from the post (the first paragraph,
truncated at 250 characters). These posts are added like any other post,
but use a special tag, and a "featured" image to display in the
carousel. The last 10 items tagged as "annoucements" will display in the
carousel, though that can be changed in the **Home** page shortcode for
the carousel.

To add a new post to the carousel, log in to the Wordpress Admin and
click on the **Posts** menu on the left, then the **Add New** button at
the top.

# todo new_post

Enter a title for the post, and then in the main content area, write the
description to attach. This can be as long (or short) as you desire, but
be aware that the first 250 characters from the first paragraph will be
what users see on the main carousel.

Assign a category for the post (this helps with helping people quickly
find what they're looking for), as well as a any tags you want. The key
to getting this post in the carousel, however, is to make sure you tag
the post "**annoucements**".

The last step before publishing is to assign a **Featured Image** to the
post. Click on the "**Set Featured Image**" link on the right. You will
see the **Media Library** where you can use a resource that has already
been uploaded, or click on the **Upload Files** tab and upload image
files you would like to use.

When you have finished your selection, click on the **Set Featured
Image** button to use that image.

<blockquote>
  <strong>Note on Image Filesize:</strong> Images for use in the
carousel should be <strong>at least</strong> 800px x 500px, preferablly larger.
Wordpress will generate derivative images for other sizes of images, so
you do not need to post-process image sizes.
</blockquote>

Once your post is ready, simply click on the **Publish** button, or
schedule the post to be published later by setting a date/time to be
added.

#### Other Posts
There may be news items that do not need to be in the carousel, but show
up in the **News** area (and in the RSS feed). Simply add a new post,
filling out the appropriate fields (title, content, categories, tags).
Once you're ready to publish the post, simply click on the **Publish**
button.

### Pages

### Users

### Closings

This theme contains logic to display a school closing message for the
day that it is added, then automatically remove the warning at midnight.

To add a **Closing** message, log in to the Wordpress Admin, and click
on the "School Closings" menu on the left.

# TODO: get image

In the "Add New Closing" screen, simply enter the message you would like
displayed on the landing page of the site.

# TODO: add_closing image

When you are done, click the publish button and ensure the notice is
visible on the main page.

# TODO closings_message


