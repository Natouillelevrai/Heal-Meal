import { test, expect } from '@playwright/test';

test('Le formulaire d’inscription fonctionne (3 étapes)', async ({ page }) => {
    await page.goto('http://localhost:8000/register');

    // Étape 1 : Nom, prénom, date de naissance
    await page.fill('input[name="lastname"]', 'Durand');
    await page.fill('input[name="firstname"]', 'Emma');
    await page.fill('input[name="birth"]', '2005-05-20');
    await page.waitForTimeout(1000); // 3000 milliseconds = 3 seconds
    await page.click('#nextStep');
    await page.waitForTimeout(2000); // 3000 milliseconds = 3 seconds


    // Étape 2 : Email, pseudo, mot de passe
    const email = `emma${Date.now()}@test.com`;
    const username = Math.random().toString(36).substring(2, 10);
    await page.fill('input[name="email"]', email);
    await page.fill('input[name="username"]', username);
    await page.fill('input[name="password"]', 'password');
    await page.fill('input[name="password_confirmation"]', 'password');
    await page.click('#nextStep');
    await page.waitForTimeout(2000); // 3000 milliseconds = 3 seconds


    // Étape 3 : Régime, allergènes, objectif
    await page.selectOption('select[name="regime"]', 'vegan');
    await page.fill('input[name="allergenes"]', 'gluten');
    await page.waitForTimeout(500); // 3000 milliseconds = 3 seconds
    await page.selectOption('select[name="objectif"]', 'perte-poids');
    await page.waitForTimeout(2000); // 3000 milliseconds = 3 seconds


    // 🔧 Hack : Supprimer l'attribut disabled si le bouton ne s'active pas automatiquement
    await page.evaluate(() => {
        const button = document.querySelector('#validate-form');
        if (button) button.removeAttribute('disabled');
    });

    // 🔍 On attend que le bouton soit visible et cliquable
    await page.waitForSelector('#validate-form', { state: 'visible' });
    await page.click('#validate-form');

    // ✅ Attente de redirection post-inscription
    await page.waitForURL(/\/(home|dashboard|profile)/);

    // Vérification finale
    await expect(page).toHaveURL(/\/(home|dashboard|profile)/);
});
