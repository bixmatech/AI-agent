# AI Agents SaaS (Laravel)

## Plesk Deployment
- Zip the project directory (excluding vendor if needed) and upload to your Plesk domain root.
- Extract and ensure `storage` and `bootstrap/cache` are writable.
- Create a MySQL database in Plesk and set `.env` accordingly (DB_*, APP_URL, MAIL_*, OPENAI_API_KEY, STRIPE_*).
- Visit `/install` to generate app key, run migrations, and create the first admin user.

## Features
- Agents (chatbots) with model settings, public pages, embed.
- Chat UI (guest trial of 3 messages, then login), history, sharing.
- Credits and Stripe checkout; manual bank payments with admin approval.
- Admin panel to manage agents, packages, users, payments.
