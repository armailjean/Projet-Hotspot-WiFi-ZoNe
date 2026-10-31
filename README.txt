# 🌐 ZoNe206 WiFi — Portail Captif MikroTik

<p align="center">
  <strong>Une interface Wi-Fi moderne, responsive et professionnelle pour MikroTik Hotspot.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/MikroTik-Hotspot-red?style=for-the-badge&logo=mikrotik" alt="MikroTik Hotspot">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/Responsive-Design-2EA44F?style=for-the-badge" alt="Responsive Design">
</p>

---

## 📌 Présentation

**ZoNe206 WiFi** est un projet de portail captif (**Captive Portal**) développé pour un réseau Wi-Fi utilisant **MikroTik Hotspot**.

L'objectif est de proposer aux utilisateurs une **page d'accueil moderne, claire, responsive et adaptée à un environnement Wi-Fi public**, tout en conservant la compatibilité avec les mécanismes d'authentification et de redirection de MikroTik.

La page constitue le premier point de contact entre l'utilisateur et le service Wi-Fi. Elle permet notamment de présenter le réseau, les offres disponibles et l'interface de connexion avant l'accès à Internet.

---

## 🎯 Objectifs du projet

Le projet a été conçu autour de plusieurs objectifs :

- 📡 améliorer l'expérience utilisateur lors de la connexion au Wi-Fi ;
- 🎨 proposer une identité visuelle moderne pour **ZoNe206** ;
- 🔐 intégrer le portail avec **MikroTik Hotspot** ;
- 📱 garantir une bonne expérience sur smartphone ;
- 💻 assurer une adaptation aux ordinateurs et tablettes ;
- 💳 présenter clairement les offres Internet disponibles ;
- 🌄 conserver une visibilité importante de l'image de fond ;
- ⚡ maintenir une interface légère et rapide à charger ;
- 🧩 fournir une architecture facilement personnalisable.

---

# ✨ Fonctionnalités

## 🔐 Authentification Hotspot

La page de connexion est conçue pour fonctionner avec les variables dynamiques du système MikroTik Hotspot.

Elle peut notamment exploiter :

```text
$(link-login-only)
$(link-orig)
$(username)
$(password)
$(error)
$(chap-id)
$(chap-challenge)
