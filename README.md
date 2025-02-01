
---

# 🚀 Laravel Multi-Tenancy Project

## 📌 Introduction

This project demonstrates **multi-tenancy in Laravel**, where multiple clients (tenants) **share the same core application code** but have their data **isolated** in separate databases. Each tenant has its own database, ensuring that their data is kept separate from others, while the core app code remains shared across all tenants.

## 👨🏻‍💻 Tenant

We've 3 tenants (clients) → Zenithon, Aetheris, Luminex.

## ⚙️ How to Set Up

### 1️⃣ Run Landlord Database Migration
```bash
php artisan landlord:database
```
This command:
- Clears existing migrations.
- Runs fresh migrations for the landlord database.
- Applies migrations stored in `database/migrations/landlord`.

---

### 2️⃣ Seed Tenant Data into the Landlord Database
```bash
php artisan db:seed --class=TenantTableSeeder
```
This command:
- Inserts tenant details into the landlord database.
- Defines database configurations for each tenant.

---

### 3️⃣ Migrate Tenant Databases
```bash
php artisan tenant:database
```
This command:
- Fetches all tenants from the landlord database.
- Runs fresh migrations for each tenant's database.

---

### 4️⃣ Seed Users for Each Tenant
Run the following commands to seed user data into the respective tenant databases:

```bash
php artisan system:seeder saas_landlord LandlordUserTableSeeder
```
Seeds users for the **landlord database**.

```bash
php artisan system:seeder saas_zenithon ZenithonUserTableSeeder
```
Seeds users for the **Zenithon tenant database**.

```bash
php artisan system:seeder saas_aetheris AetherisUserTableSeeder
```
Seeds users for the **Aetheris tenant database**.

```bash
php artisan system:seeder saas_luminex LuminexUserTableSeeder
```
Seeds users for the **Luminex tenant database**.

---

## 📂 Project Structure

- **Commands**
    - `HandleSeederCommand.php` → Runs seeders dynamically for a specified tenant.
    - `LandlordMigrateCommand.php` → Migrates the landlord database.
    - `TenantMigrateCommand.php` → Migrates all tenant databases.

- **Seeders**
    - `TenantTableSeeder.php` → Inserts tenant configurations.
    - `LandlordUserTableSeeder.php` → Seeds landlord users.
    - `ZenithonUserTableSeeder.php` → Seeds users for Zenithon.
    - `AetherisUserTableSeeder.php` → Seeds users for Aetheris.
    - `LuminexUserTableSeeder.php` → Seeds users for Luminex.

---

## 🎯 Key Features
✅ **Same Core Code** – All tenants share the same core application code.  
✅ **Isolated Databases** – Each tenant has a separate database.  
✅ **Scalable & Maintainable** – Easily add new tenants.  
✅ **Efficient User Management** – Seed data per tenant.

---

## 🚀 Ready to Get Started?
Clone the project and follow the setup commands above! 💪

Let me know if you'd like any modifications! 😊
