# 🌐 Personal Portfolio Website

A multi-page personal portfolio website built for the **Web Technologies** course at Sakarya University, Department of Computer Engineering.

## 📋 About

This project is an interactive website where the student introduces himself, shares his hobbies, educational background, hometown (Eskişehir), and favorite sports team (Eskişehirspor).

## 🛠️ Technologies Used

| Technology | Usage |
|-----------|-------|
| **HTML5** | Page structure and semantic markup |
| **CSS3** | Custom styles, animations, responsive design |
| **JavaScript** | DOM manipulation, tab system, form validation, API calls |
| **Bootstrap 5** | Grid system, Carousel, List Group components |
| **Vue.js 2** | Contact form management and validation |
| **PHP** | Server-side authentication on login page |
| **FontAwesome** | Icon set |
| **TMDb API** | Fetching popular movie data |

## 📄 Pages

| Page | File | Description |
|------|------|-------------|
| Home | `index.html` | About section, skills tabs, hobby cards |
| Hobbies | `hobilerim.html` | Detailed hobbies + popular movies via TMDb API |
| Resume | `cv.html` | Education history (Bootstrap List Group) |
| My City | `sehrimiz.html` | Eskişehir city guide, places to visit, Bootstrap Carousel |
| Our Legacy | `mirasimiz.html` | Eskişehirspor team info, roster, anthem |
| Contact | `iletisim.html` | Contact form (Vue.js + JS dual validation) |
| Login | `login.php` | PHP + JS authentication system |
| Form Display | `formgoruntule.html` | Displays submitted form data from URL parameters |
| Kanlıkavak | `kanlikavak.html` | Kanlıkavak Park detail page |
| Sazova | `sazova.html` | Sazova Park detail page |
| Odunpazarı | `odunpazariev.html` | Odunpazarı Houses detail page |
| Adalar | `adalar.html` | Adalar district detail page |

## 🚀 Getting Started

### Prerequisites
- A modern web browser
- Python 3.x (for local server) **or** PHP (for full functionality including login)

### 🔑 API Setup (TMDb)
To display popular movies dynamically on the Hobbies page, you will need a free TMDb API key:
1. Create an account at [The Movie Database (TMDb)](https://www.themoviedb.org/).
2. Go to your account settings (API section) and generate a Developer API key.
3. Open the `js/hobi.js` file.
4. Replace the placeholder string with your actual API key:
   ```javascript
   const apiKey = 'YOUR_TMDB_API_KEY_HERE';
   ```

### Running Locally

**Option 1 – Python (recommended for static pages):**
```bash
cd personal-portfolio
python -m http.server 8000
```
Then open [http://localhost:8000](http://localhost:8000) in your browser.

**Option 2 – PHP (full functionality including login):**
```bash
cd personal-portfolio
php -S localhost:8000
```
Then open [http://localhost:8000](http://localhost:8000) in your browser.

> **Note:** The `login.php` page requires a PHP server to function properly. With Python's HTTP server, all pages except login will work correctly.

## 📁 Project Structure

```
personal-portfolio/
├── index.html               # Home page
├── hobilerim.html           # Hobbies page
├── cv.html                  # Resume page
├── sehrimiz.html            # City guide page
├── mirasimiz.html           # Eskişehirspor page
├── iletisim.html            # Contact form page
├── login.php                # Login page (PHP)
├── formgoruntule.html       # Form data display page
├── kanlikavak.html          # Detail page
├── sazova.html              # Detail page
├── odunpazariev.html        # Detail page
├── adalar.html              # Detail page
│
├── css/                     # Stylesheets
│   ├── main.css             # Main site styles
│   ├── bootstrap.min.css    # Bootstrap 5 (local)
│   ├── hobilerim.css        # Page-specific styles
│   ├── cv.css
│   ├── sehrimiz.css
│   ├── mirasimiz.css
│   ├── iletisim.css
│   ├── login.css
│   ├── formgoruntule.css
│   ├── kanlikavak.css
│   ├── sazova.css
│   ├── odunpazariev.css
│   └── adalar.css
│
├── js/                      # JavaScript
│   ├── hobi.js              # TMDb API integration
│   └── bootstrap.bundle.min.js  # Bootstrap 5 JS (local)
│
├── images/                  # Image assets
│   ├── eskfoto/             # City photo gallery
│   └── ...
│
├── audio/                   # Audio files
│   └── eskisehirspor-marsi.mp3
│
├── .gitignore
└── README.md
```

## ✨ Key Features

- 📱 **Responsive Design** – Mobile-friendly with hamburger menu
- 🎬 **TMDb API Integration** – Fetches popular movies dynamically
- 📝 **Dual Form Validation** – Both vanilla JavaScript and Vue.js validation
- 🔐 **PHP Login System** – Server-side authentication
- 🎠 **Bootstrap Carousel** – Auto-sliding city photo gallery
- 🎵 **HTML5 Audio Player** – Eskişehirspor anthem
- ⬆️ **Back to Top Button** – Smooth scroll control

## 👤 Author

**Kerem Yunus Parlakyiğit**  
Sakarya University – Computer Engineering  
Student ID: 123456789
