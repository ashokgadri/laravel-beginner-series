# 📘 Laravel Beginner Series – Source Code

This repository contains the **source code for the Laravel Beginner Series** on YouTube by **CodeWithAshok**.

The goal of this series is to help beginners understand **how Laravel actually works**, step by step, by building a real application and explaining core concepts clearly.

Each video in the series maps to a **Git tag**, allowing you to check out the **exact code state** used in that video.

---

## 🎥 YouTube Series

Laravel Beginner Series on YouTube  
Channel: **CodeWithAshok**

(The video links are available in each video description.)

---

## 📺 Completed Videos & Git Tags

### 1️⃣ Laravel Installation

**Git Tag:** `video-1-install`

Covers:

-   Installing Laravel using Composer / Laravel Herd
-   Verifying the installation
-   Running a fresh Laravel project

```bash
git checkout video-1-install
```

---

### 2️⃣ Laravel Folder Structure

**Git Tag:** `video-1-install`

Explains:

-   Laravel’s directory structure
-   Purpose of important folders
-   How Laravel organizes files internally

📌 This video is **conceptual only**.  
No functional code changes are introduced.

```bash
git checkout video-1-install
```

---

### 3️⃣ Laravel Routes & Blade Views

**Git Tag:** `video-3-routes-views`

Explains:

-   Laravel routing basics
-   Handling 404 (Page Not Found) errors
-   Returning text vs Blade views
-   Home and About pages
-   Passing data from routes to views
-   Laravel flow: URL → Route → View → Browser

```bash
git checkout video-3-routes-views
```

---

### 4️⃣ Laravel Controllers Explained (Routes → Controllers)

**Git Tag:** `video-4-controllers`

Explains:

-   Why putting logic inside routes becomes a problem
-   Why controllers exist in Laravel
-   Creating and using controllers
-   Moving logic from routes to controllers
-   Data flow: Route → Controller → View
-   Passing data from controllers to Blade views
-   Named routes (intro)

📌 No database  
📌 No models  
📌 Just core Laravel fundamentals

```bash
git checkout video-4-controllers
```

---

### 5️⃣ Laravel Database Basics — Where Does Data Come From?

**Git Tag:** `video-5-database-basics`

Explains:

-   Why hardcoding data in controllers becomes a problem
-   Why databases exist and what problem they solve
-   Where Laravel stores and retrieves real data
-   What migrations are (high level)
-   What models are (without overwhelm)
-   Laravel data flow:  
    Route → Controller → Model → Database → View

📌 No authentication  
📌 No validation  
📌 No relationships  
📌 Focus on fundamentals only

```bash
git checkout video-5-database-basics
```

---

## 🧭 How to Use This Repository

1. Clone the repository:

```bash
git clone https://github.com/ashokgadri/laravel-beginner-series.git
```

2. List available video tags:

```bash
git tag
```

3. Checkout the tag that matches the video you are watching:

```bash
git checkout <tag-name>
```

---

## 🏷️ Tag Strategy

-   One Git tag per YouTube video
-   Tags are immutable once published
-   Ensures reproducible learning

---

## 🚀 Upcoming Videos

-   Adding data using Laravel (no manual database editing)
-   Route Model Binding
-   Validation Basics
-   Eloquent Models & Relationships
-   Middleware & Authentication

---

## 🙋 About the Author

**Ashok Gadri**  
YouTube: https://www.youtube.com/@GadriAshok  
GitHub: https://github.com/ashokgadri

I create beginner-friendly Laravel and backend development tutorials.

---

## ⭐ Support

If this series helped you:

-   ⭐ Star this repository
-   👍 Like the YouTube videos
-   🔔 Subscribe to the channel

Happy learning 🚀
