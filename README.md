Dante Weverbergh -
WebdevII - werkstuk

## env

Important things to change is de .ENV file:

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


## admin dashboard

- News articles: post, edit and delete articles
- Products in the shop: Add, edit and delete products in the webshop

## test data

admin dashboard login:

- Email: `admin@admin.be`
- Password: `wepqi6-byshiq-zaqXyx`

Credit card testdata(not a real card):

- Credit card: `4242 4242 4242 4242`
- date: `05/22`
- CVC: `123`
- Postal code: `12345`
