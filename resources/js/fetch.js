async function getData(url = null, body = null) {
    if (!url) return;

    const options = {
        method: body ? 'POST' : 'GET',
        headers: {},
        body: undefined,
        mode: 'cors' // optionnel, selon ton backend
    };

    if (body instanceof FormData) {
        options.body = body;
        options.headers['Accept'] = 'application/json';
    } else if (body && typeof body === 'object') {
        options.headers = {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        };
        options.body = JSON.stringify(body);
        console.log('Envoi JSON :', options.body);
    }

    const response = await fetch(url, options);

    if (!response.ok) {
        let errorData;
        try {
            errorData = await response.json();
        } catch (e) {
            errorData = { message: response.statusText, status: response.status };
        }
        throw errorData;
    }

    return await response.json();
}

async function init(url, body = null) {
    try {
        return await getData(url, body);
    } catch (error) {
        console.error('Erreur dans init:', error);
        throw error;
    }
}

export { getData, init };
