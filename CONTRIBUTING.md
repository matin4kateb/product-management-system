# Contributing

Thank you for contributing to Product Manager.

## Before you start

1. Check existing issues and pull requests.
2. Open an issue for substantial changes before implementation.
3. Keep each pull request focused on one concern.

## Local setup

Follow the setup instructions in [README.md](README.md), then run:

```bash
php artisan test
vendor/bin/pint --test
npm run build
```

All three checks should pass before opening a pull request.

## Guidelines

- Follow Laravel conventions and PSR-12-compatible PHP style.
- Use Form Requests for input validation.
- Use policies or gates for authorization.
- Keep business logic out of Blade templates.
- Add or update tests for behavior changes.
- Do not commit `.env`, credentials, generated assets or dependency directories.
- Preserve backwards compatibility when changing migrations or routes where practical.

## Commit messages

Use short, descriptive messages in the imperative mood, for example:

```text
Add product category filter
Fix product ownership policy
Improve mobile navigation
```

## Pull requests

Include a concise description, testing performed, migration or deployment notes, and screenshots for UI changes.
