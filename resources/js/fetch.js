async function getData(url = null, body = null) {
  if (!url) {
    return;
  }

  const options = {
    method: body ? 'POST' : 'GET',
    headers: {},
    body: undefined,
  };

  if (body instanceof FormData) {
    options.body = body;
  } else if (body) {
    options.headers = {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
    };
    options.body = JSON.stringify(body);
  }

  const response = await fetch(url, options);

  if (!response.ok) {
    const errorData = await response.json();
    throw errorData;
  }

  return await response.json();
}

async function init(url, body = null) {
  return await getData(url, body);
}

export { getData, init };
