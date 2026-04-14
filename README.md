
# 🚀 Laravel CI/CD Automation Suite

This repository demonstrates a modern **CI/CD pipeline** built using **GitHub Actions**. It focuses on automating the validation, build, and deployment readiness of a containerized Laravel application, ensuring that only high-quality, tested code reaches production.

---

## 🏗️ Pipeline Architecture

The pipeline is designed to handle both frontend and backend assets through isolated, optimized build environments:

1.  **Continuous Integration (CI)**:
    - **Linting & Code Quality**: Automatic checks for PHP and JavaScript styling.
    - **Automated Testing**: Runs the PHPUnit suite to ensure business logic integrity.
    - **Environmental Isolation**: Uses `.env.ci` to manage pipeline-specific variables.
2.  **Continuous Deployment (CD) Readiness**:
    - **Multi-Stage Docker Builds**:
        - `Dockerfile.php`: Optimized for high-performance PHP-FPM serving.
        - `Dockerfile.node`: Handles Vite/Tailwind asset compilation.
    - **Artifact Management**: Generates production-ready images ready to be pushed to a registry.

---

## 🛠️ Tech Stack

- **Workflow Engine**: [GitHub Actions](https://github.com/features/actions)
- **Application**: Laravel 11.x
- **Containerization**: Docker & Docker Compose
- **Environment**: PHP 8.2+, Node.js 20+
- **Testing**: PHPUnit

---

## 📂 Repository Highlights

| Component | Responsibility |
| :--- | :--- |
| `.github/workflows/` | Declarative YAML files defining the pipeline stages. |
| `Dockerfile.php` | The PHP-FPM container configuration. |
| `Dockerfile.node` | The Node.js environment for frontend build steps. |
| `docker-compose.yml` | Local orchestration for dev/testing environments. |
| `.env.ci` | Configuration tailored for the GitHub Actions runner. |

---

## 🚀 Getting Started

### **Running Locally**
1. **Clone the repository**:
   ```bash
   git clone [https://github.com/shashidas95/basic_ci_cd.git](https://github.com/shashidas95/basic_ci_cd.git)
   ```
2. **Setup Containers**:
   ```bash
   docker-compose up -d
   ```

### **Triggering the Pipeline**
The pipeline is configured to trigger automatically on:
- Every `push` to the `main` branch.
- Every `pull_request` targeting the `main` branch.

---

## 👨‍💻 Author
**Shashi Kanta Das**
*Software Architect | DevOps Engineer | Assistant Director @ BSTI*
