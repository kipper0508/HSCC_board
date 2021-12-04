photo.onchange = evt => {
  const [file] = photo.files
  if (file) {
    preview.src = URL.createObjectURL(file)
  }
}