Dante Weverbergh -
WebdevII - werkstuk

## env

Belangrijk om te veranderen in .env file (zie env.example)

- contact email

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=
MAIL_PASSWORD=
```

- Mailchimp newsletter

```
MAILCHIMP_APIKEY
MAILCHIMP_LIST_ID
```

- stripe

```
STRIPE_KEY=
STRIPE_SECRET=
```

## enkele opmerkingen

- Privacy policy staat enkel in de footer
- Admin dashboard ook enkel bereikbaar via footer (minder storend voor gebruikers)

## admin dashboard

- nieuwsartikels: verijderen, toevoegen, editen
- producten in webshop: verwijderen, toevoegen, editen

## test gegevens

admin dashboard login:

- Email: `admin@admin.be`
- Password: `wepqi6-byshiq-zaqXyx`

Credit card testegegevns:

- Credit card: `4242 4242 4242 4242`
- date: `05/22`
- CVC: `123`
- Postal code: `12345`
