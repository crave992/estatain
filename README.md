# estatain

## Installation & Integration Guide

### 1. Install WordPress Locally

1. Download the latest version of WordPress from [wordpress.org](https://wordpress.org/download/).
2. Extract the WordPress files to your local web server directory (e.g., `htdocs` for XAMPP, `www` for WAMP, or your preferred local server).
3. Create a new MySQL database for your site using phpMyAdmin or the command line.
4. Open your browser and navigate to `http://localhost/your-folder-name` to run the WordPress installation wizard.
5. Follow the prompts to set up your site, database, and admin user.

### 2. Import the Provided Database (db_growmodo.sql)

If you want to use the sample data provided:

1. Open [phpMyAdmin](http://localhost/phpmyadmin) in your browser.
2. Select the database you created for your WordPress site from the left sidebar.
3. Click the **Import** tab at the top.
4. Click **Choose File** and select `db_growmodo.sql` from the `estatain` theme folder.
5. Leave the default options and click **Go** at the bottom.
6. Wait for the import to finish. You should see a success message.

_Note: Importing this file will add or overwrite data in your selected database. Make sure you are importing into the correct database._

### 3. Add Plugins and Uploads

- **Plugins:**

  1. Copy the entire `plugins` folder from this project into your WordPress installation's `wp-content/` directory, so it becomes `wp-content/plugins/`.
  2. In your WordPress admin dashboard, go to **Plugins → Installed Plugins** and activate any required plugins.

- **Uploads:**
  1. Copy the `uploads` folder from this project into your WordPress installation's `wp-content/` directory, so it becomes `wp-content/uploads/`.
  2. This folder contains media files (images, etc.) referenced by the sample content and theme.

### 4. Integrate the Estatain Theme

1. Copy the entire `estatain` theme folder (located in `wp-content/themes/estatain`) into your WordPress installation's `wp-content/themes/` directory.
2. In your WordPress admin dashboard, go to **Appearance → Themes**.
3. Find "Estatain" and click **Activate**.

### 5. Install Theme Dependencies (Optional)

If the theme uses SCSS or TypeScript, you may want to compile assets:

1. Make sure you have [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) installed.
2. Open a terminal in the `estatain` theme directory.
3. Run `npm install` to install dependencies.
4. Run `npm run build` or `npm run dev` to compile assets (see `package.json` for available scripts).

### 6. Customize Your Site

- Go to **Appearance → Customize** to:
  - Set your site logo and identity.
  - Configure the header headline and link.
  - Add custom footer text, year, and social media links (Facebook, LinkedIn, Twitter, YouTube).
- Set up your menus under **Appearance → Menus** for Primary and Secondary navigation.
- Add widgets to the sidebar if needed.

### 7. Additional Notes

- Social icons in the footer are managed via the Customizer. Only icons with URLs set will display.
- SCSS and JS assets are located in `assets/src/` and compiled to the appropriate directories.
- For further customization, edit the theme files directly or extend via a child theme.
- Here is the WP Credential if needed:
- username: adrian_valbuena
- password: CrMMr0$@s#01F1KPC\*

---

For more help, see the official [WordPress documentation](https://wordpress.org/support/article/new-to-wordpress-where-to-start/) or contact the theme author.
