# 📘 API Documentation (Markdown)

## Base URL

```
https://giafauzan.my.id
```

---

## 📂 1. Contact

### **GET** `/api/contact`

Mengambil data **contact.json**.

#### **Response (200)**

```json
{
  "email": "alex@example.com",
  "github": "@alexchen",
  "linkedin": "/in/alexchen",
  "availability_message": "Let's connect and build something great!",
  "response_time": "~24h"
}

```

---

## 📂 2. Experience

### **GET** `/api/experience`

Mengambil data **experience.json**.

#### **Response (200)**

```json
{
  "experiences": [
    {
      "role": "Senior Backend Engineer",
      "company": "TechCorp Inc.",
      "period": "2022 - Present",
      "highlights": [
        "Led redesign of core API infrastructure, reducing latency by 60%",
        "Built real-time event processing system handling 1M+ events/sec",
        "Mentored team of 5 junior engineers on API design best practices"
      ]
    },
    {
      "role": "Backend Engineer",
      "company": "StartupXYZ",
      "period": "2020 - 2022",
      "highlights": [
        "Engineered scalable microservices architecture from scratch",
        "Implemented automated testing achieving 85% code coverage",
        "Optimized database queries improving response time by 3x"
      ]
    },
    {
      "role": "Junior Developer",
      "company": "WebServices Ltd.",
      "period": "2018 - 2020",
      "highlights": [
        "Built REST APIs for customer applications",
        "Contributed to DevOps infrastructure and deployment automation",
        "Participated in on-call support and incident response"
      ]
    }
  ]
}

```

---

## 📂 3. Overview

### **GET** `/api/overview`

Mengambil data **overview.json**.

#### **Response (200)**

```json
{
  "name": "Alex Chen",
  "role": "Backend Engineer",
  "tagline": "Designing and building robust, scalable APIs that power modern applications.",
  "summary": "Experienced backend engineer with 8+ years designing high-performance APIs and distributed systems. Expert in cloud-native architecture, reliability engineering, and performance optimization."
}

```

---

## 📂 4. Projects

### **GET** `/api/projects`

Mengambil data **projects.json**.

#### **Response (200)**

```json
{
  "projects": [
    {
      "title": "High-Performance API Gateway",
      "description": "Built a distributed API gateway handling 10M+ requests/day with sub-100ms latency",
      "stack": ["Go", "gRPC", "Kubernetes", "Prometheus"],
      "impact": "Reduced latency by 65%, improved throughput by 3x"
    },
    {
      "title": "Microservices Architecture",
      "description": "Redesigned monolithic application into scalable microservices",
      "stack": ["Node.js", "Docker", "Kubernetes", "gRPC"],
      "impact": "Reduced deployment time from 2h to 5min"
    }
  ]
}
```

---

## 📂 5. Skills

### **GET** `/api/skills`

Mengambil data **skills.json**.

#### **Response (200)**

```json
{
  "backend_frameworks": ["Node.js", "Go", "Python", "Java", "Spring Boot", "FastAPI", "Express.js"],
  "databases": ["PostgreSQL", "MongoDB", "Redis", "Elasticsearch", "DynamoDB", "Cassandra"],
  "infrastructure": ["AWS", "Google Cloud", "Kubernetes", "Docker", "Terraform"],
  "tools": ["gRPC", "GraphQL", "REST APIs", "Message Queues", "Microservices", "Testing"]
}
```

---

## 📂 6. Tech Stack

### **GET** `/api/techstack`

Mengambil data **techstack.json**.

#### **Response (200)**

```json
{
  "runtime_frameworks": {
    "Go": "Expert",
    "Node.js": "Expert",
    "Python": "Proficient",
    "Spring Boot": "Proficient"
  },
  "databases_caching": {
    "PostgreSQL": "Expert",
    "Redis": "Expert",
    "MongoDB": "Proficient",
    "Elasticsearch": "Proficient"
  },
  "cloud_devops": {
    "AWS": "Expert",
    "Kubernetes": "Proficient",
    "Docker": "Expert",
    "Terraform": "Proficient"
  },
  "observability": {
    "Prometheus": "Expert",
    "Datadog": "Proficient",
    "ELK Stack": "Proficient",
    "Jaeger": "Proficient"
  }
}
```

---

## ❌ Error Response

Jika file tidak ditemukan:

**Status:** 404

```json
{
  "error": "Not found"
}
```

---
