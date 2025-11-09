# Blockwise - WordPress Theme

A modern, fast, and lightweight WordPress theme built with **Tailwind CSS v3** for blazing-fast development and optimal performance.

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![WordPress](https://img.shields.io/badge/WordPress-6.0+-blue.svg)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v3.4.18-38bdf8.svg)

## 🚀 Features

- 🎨 **Tailwind CSS v3** - Latest version with simplified setup and improved performance
- 📱 **Fully Responsive** - Mobile-first design approach
- 🔧 **Zero Configuration** - Automatic content detection with Tailwind v3
- 🎯 **Modern Workflow** - No config files needed, CSS-based customization
- 🔥 **Hot Reload** - See changes instantly during development
- 📦 **Optimized Build** - Minified CSS and JS for production
- 🌐 **Crypto-Focused** - Perfect for cryptocurrency and blockchain blogs

## 📋 Requirements

- **WordPress**: 6.0 or higher
- **PHP**: 7.2 or higher
- **Node.js**: 18.0 or higher
- **npm**: 9.0 or higher

## 🛠️ Installation

### 1. Clone or Download Theme

```bash
cd wp-content/themes
git clone https://github.com/yourusername/blockwise.git
# or download and extract the ZIP file
```

### 2. Install Dependencies

Navigate to the theme directory and install npm packages:

```bash
cd blockwise
npm install
```

### 3. Configure WordPress Environment

Add this to your `wp-config.php` file:

```php
// Development mode
define('WP_ENV', 'development');

// Production mode (uncomment for production)
// define('WP_ENV', 'production');
```

### 4. Activate Theme

Go to **WordPress Admin → Appearance → Themes** and activate **Blockwise**.

## 🎯 Development

### Start Development Server

Run the node development server with hot reload:

```bash
npm run dev
```

This will start the dev server on `http://localhost:5173`. Make sure your WordPress site is running and the theme is activated.

### Making Changes

- **Edit PHP files**: `index.php`, `header.php`, `footer.php`, etc.
- **Edit styles**: `assets/css/input.css`
- **Edit scripts**: `assets/js/app.js`
- **Use Tailwind classes**: Directly in your PHP templates

Changes will be reflected instantly in your browser!


## 🏗️ Production Build

### Build for Production

When ready to deploy, build optimized assets:

```bash
npm run build
```

This creates minified files in the `dist/` folder.

### Deploy

1. Build the assets: `npm run build`
2. Update `wp-config.php`: Change `WP_ENV` to `'production'`
3. Upload theme to your production server
4. **Important**: Include the `dist/` folder (built assets)

### What to Upload

```
blockwise/
├── dist/              ✅ Include (built assets)
├── assets/            ✅ Include (source files)
├── *.php              ✅ Include (theme files)
├── functions.php      ✅ Include
├── style.css          ✅ Include
├── screenshot.png     ✅ Include
├── node_modules/      ❌ Exclude
└── package.json       ✅ Include
```

## 📁 Theme Structure

```
blockwise/
├── assets/
│   ├── css/
│   │   └── input.css          # Main CSS file with Tailwind import
│   └── js/
│       └── app.js            # Main JavaScript file
├── dist/                     # Production build output (generated)
│   ├── css/
│   │   └── main.css
│   └── js/
│       └── app.js
├── node_modules/             # npm dependencies (excluded from repo)
├── functions.php             # Theme functions
├── style.css                 # Theme metadata
├── index.php                 # Main template
├── header.php                # Header template
├── footer.php                # Footer template
├── single.php                # Single post template
├── page.php                  # Page template
├── screenshot.png            # Theme screenshot
├── package.json              # npm configuration
├── tailwind.config.js        # Tailwind configuration
├── .gitignore                # Git ignore file
└── README.md                 # This file

Some files might not be included
```

## 🎨 Using Tailwind CSS

### Basic Usage

Use Tailwind utility classes directly in your PHP templates:

```php
<div class="container mx-auto px-4">
  <h1 class="text-4xl font-bold text-blue-600">
    <?php the_title(); ?>
  </h1>
  <p class="mt-4 text-gray-700">
    <?php the_content(); ?>
  </p>
</div>
```

### Responsive Design

```php
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <!-- Cards -->
</div>
```

### Dark Mode (if enabled)

```php
<div class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
  <!-- Content -->
</div>
```

## 🔧 Configuration Files

### package.json Scripts

- `npm run dev` - Start development server
- `npm run build` - Build for production

## 🐛 Troubleshooting

### Styles Not Loading

**Issue**: Tailwind classes aren't being applied.

**Solution**:
1. Make sure dev server is running: `npm run dev`
2. Check that `WP_ENV` is set to `'development'` in `wp-config.php`
3. Clear browser cache
4. Check browser console for errors

### Build Issues

**Issue**: Build fails or produces errors.

**Solution**:
1. Delete `node_modules/` and `package-lock.json`
2. Run `npm install` again
3. Try `npm run build` again

### Hot Reload Not Working

**Issue**: Changes not reflecting in browser.

**Solution**:
1. Make sure dev server is running on port 5173
2. Check that WordPress can access `http://localhost:5173`
3. Try hard refresh: `Ctrl+Shift+R` (Windows) or `Cmd+Shift+R` (Mac)

### Production Site Shows Unstyled Content

**Issue**: Styles missing on production site.

**Solution**:
1. Ensure you ran `npm run build` before deploying
2. Verify `dist/` folder exists and contains CSS/JS files
3. Check `WP_ENV` is set to `'production'` in `wp-config.php`
4. Check file permissions on the server

## 📚 Resources

- [Tailwind CSS v3 Documentation](https://v3.tailwindcss.com)
- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [WordPress Codex](https://codex.wordpress.org/)

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

## 📝 License

This theme is licensed under the [MIT License](LICENSE).

## 👨‍💻 Author

**Your Name**
- Website: [sanweblab.com](https://sanweblab.com)
- GitHub: [@sanusiaz](https://github.com/sanusiaz)

## 🙏 Acknowledgments

- [Tailwind CSS](https://tailwindcss.com/) - For the amazing CSS framework
- [WordPress](https://wordpress.org/) - For the powerful CMS

## 📊 Changelog

### Version 1.0.0 (2025-11-09)
- Initial release
- Tailwind CSS v3 integration
- Responsive design
- Basic blog functionality

---

**⭐ If you find this theme useful, please consider giving it a star on GitHub!**