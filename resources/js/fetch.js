async function getData(url = null) {
  if (!url) {
    return;
  }

  const response = await fetch(`${url}`);
  return await response.json();
}

async function init(url) {
  return await getData(url);
}

export {getData, init};