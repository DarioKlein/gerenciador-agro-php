# 🚀 Agro Compose

Este projeto utiliza **Docker Compose** para subir um ambiente com PHP, MySQL e phpMyAdmin.

---

## 📦 Tecnologias

* Docker
* phpMyAdmin
* PHP (Apache)
* MySQL

---

# ⚙️ Como subir o projeto

Na raiz do projeto, execute:

```bash
docker compose up -d
```

👉 Isso irá:

* Subir o PHP
* Subir o MySQL
* Subir o phpMyAdmin
* Rodar tudo em segundo plano

---

# 🛑 Como parar o projeto

Para desligar todos os containers:

```bash
docker compose down
```

---

# 🌐 Acessos

Após subir o projeto:

* Aplicação PHP:
  👉 [http://localhost/insumo.php](http://localhost/insumo.php)

* phpMyAdmin:
  👉 [http://localhost:8080](http://localhost:8080)

---

# 🗄️ Banco de dados

## Acesso no phpMyAdmin:

* **Servidor:** `db`
* **Usuário:** `user`
* **Senha:** `user`

---

# 📥 Executar o script SQL (agro.sql)

Para importar o banco:

## 1. Acesse o phpMyAdmin

👉 [http://localhost:8080](http://localhost:8080)

---

## 2. Faça login

* usuário: `user` ou `root`
* senha: `user` ou `root`

---

## 3. Selecione o banco de dados

Escolha o banco:

```
agro
```

---

## 4. Execute o SQL

* Vá na aba **SQL**
* Abra o arquivo `db/agro.sql`
* Copie todo o conteúdo
* Cole na área SQL
* Clique em **Executar**

---

# 🔁 Reset completo (opcional)

Se quiser reiniciar tudo do zero:

```bash
docker compose down -v
docker compose up -d
```

⚠️ Isso apaga todos os dados do banco.

---

# ✅ Resumo rápido

```bash
# subir
docker compose up -d

# parar
docker compose down
```
